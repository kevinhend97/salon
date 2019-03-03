<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
     public function edit($id)
    {
    	$data = User::find($id);
    	return view('admin.profile.profile',compact('data'));
    }

    public function update(Request $request, $id)
    {

        //$this->validate($request, $this->aturan);

        $profile = User::find($id);
        $current_password = Auth::user()->password;

        //handle the user upload
        if($request->hasFile('avatar')){
            if (Auth::user()->foto != "default.jpg") {
                
                unlink(public_path('uploads/avatar/'.Auth::user()->foto));
                $avatar = $request->file('avatar');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/avatar');
                $avatar->move($destinationPath, $filename);
                
                $profile->foto = $filename;
            }
            else{

                $avatar = $request->file('avatar');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/avatar');
                $avatar->move($destinationPath, $filename);
                
                $profile->foto = $filename;    
            }
        }

        //bagian ganti password
        if(Hash::check($request['current_password'], $current_password))//untuk memecah password yang di lock
        {
            $profile->password = Hash::make($request['password']); // untuk membuat lock passw                   
        }

        //bagian update data name, username,dan email
        $profile->name = $request['name'];
        $profile->email = $request['email'];
        $profile->no_telp = $request['no_telp'];
        $profile->update();
        return redirect()->back()->with('alert', 'Proses Ubah Sukses!');
    }
}
