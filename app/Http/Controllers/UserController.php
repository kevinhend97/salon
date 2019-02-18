<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index');
    }

    public function listData()
    {
        $user = User::where('jabatan', '!=', 'Pemilik')->orderBy('id', 'asc')->get();
        $no = 0;
        $data = array();
        foreach($user as $list)
        {
            $no ++;
            $row = array();
            $row[] = $no;
            $row[] = $list->name;
            $row[] = $list->alamat;
            $row[] = $list->no_telp;
            $row[] = $list->jabatan;
            $row[] = $list->email;
            $row[] = '<img src="uploads/avatar/'.$list->foto.'" class="img-circle" alt="User Image" height="50" width="50">';
            $row[] = '<div class="btn-group">
                <a onclick="editForm('.$list->id.')" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                <a onclick="deleteData('.$list->id.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';

            $data[] = $row;
        }
        $output = array("data"=> $data);
        return response()->json($output);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //untuk menyimpan data
        $jml = User::where('email', '=', $request['email'])->count();
        //$jml2 = User::where('no_telp', '=', $request['no_telp'])->count();
        if($jml < 1)
        {
            $add = new User;
            $add->name     = $request['name'];
            $add->alamat   = $request['alamat'];
            $add->no_telp  = $request['no_telp'];
            $add->email    = $request['email'];
            $add->jabatan  = "Karyawan";
            $add->password = bcrypt($request['password']);
            $add->save();
            echo json_encode(array('msg'=>'success'));
        }
        else
        {
            echo json_encode(array('msg'=>'error'));   
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = User::find($id);
        echo json_encode($profile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
         $profile = User::find($id); 
            //bagian update data name, username,dan email
            $profile->name = $request['name'];
            $profile->alamat = $request['alamat'];
            $profile->email = $request['email'];
            $profile->no_telp = $request['no_telp'];
            $profile->jabatan = "Karyawan";
            $profile->update();
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //bagian hapus pegawai
        $profile=User::find($id);
        $profile->delete();
    }
}
