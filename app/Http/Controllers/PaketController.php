<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use Auth;
use Redirect;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.paket.index');
    }

    public function listData()
    {
        $paket = Paket::orderBy('id_paket', 'asc')->get();
        $no = 0;
        $data = array();
        foreach($paket as $list)
        {
            $no ++;
            $row = array();
            $row[] = $no;
            $row[] = $list->nama_paket;
            $row[] = $list->gambar;
            $row[] = $list->keterangan;
            $row[] = $list->harga;
            $row[] = '<div class="btn-group">
                <a onclick="editForm('.$list->id_paket.')" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                <a onclick="deleteData('.$list->id_paket.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';

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
        $jml = Paket::where('nama_paket', '=', $request['nama_paket'])->count();
        //$jml2 = User::where('no_telp', '=', $request['no_telp'])->count();
        if($jml < 1)
        {
            $add = new User;
            $add->nama_paket = $request['nama_paket'];
            $add->gambar     = $request['gambar'];
            $add->keterangan = $request['keterangan'];
            $add->harga      = $request['harga'];
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
        $paket = Paket::find($id);
        echo json_encode($paket);
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
        $paket = Paket::find($id);
        
         
            //bagian update data name, username,dan email
            $paket->nama_paket = $request['nama_paket'];
            $paket->gambar     = $request['gambar'];
            $paket->keterangan = $request['keterangan'];
            $paket->harga      = $request['harga'];
            $paket->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $paket = Paket::find($id);
        $paket->delete();
    }
}
