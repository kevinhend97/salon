<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layanan.index');
    }

    public function listData()
    {
        $layanan = Layanan::orderBy('nama_layanan', 'asc')->get();
        $no = 0;
        $data = array();
        foreach($layanan as $list)
        {
            $no ++;
            $row = array();
            $row[] = $no;
            $row[] = $list->nama_layanan;
            $row[] = $list->deskripsi;
            $row[] = $list->harga;
            $row[] = '<div class="btn-group">
                <a onclick="editForm('.$list->id_layanan.')" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                <a onclick="deleteData('.$list->id_layanan.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';

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
        $jml = Layanan::where('nama_layanan', '=', $request['nama_layanan'])->count();
        //$jml2 = User::where('no_telp', '=', $request['no_telp'])->count();
        if($jml < 1)
        {
            $add = new Layanan;
            $add->nama_layanan = $request['nama_layanan'];
            $add->deskripsi     = $request['deskripsi'];
            $add->harga = $request['harga'];
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
        $layanan = Layanan::find($id);
        echo json_encode($layanan);
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
        $layanan = Layanan::find($id);
         
        //bagian update data name, username,dan email
        $layanan->nama_layanan = $request['nama_layanan'];
        $layanan->deskripsi     = $request['deskripsi'];
        $layanan->harga      = $request['harga'];
        $layanan->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();
    }
}
