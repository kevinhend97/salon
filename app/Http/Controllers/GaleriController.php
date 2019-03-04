<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gallery.index');
    }

    public function listData()
    {
        $galeri = Galeri::orderBy('updated_at', 'desc')->get();
        $no = 0;
        $data = array();
        foreach($galeri as $list){
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $list->nama_gambar;
            $row[] = '<img src="../storage/uploads/galeri/'.$list->gambar.'" class="img-thumbnail" alt="'.$list->gambar.'">';
            $row[] = '<div class="btn-group">
                <a onclick="editForm('.$list->id_galeri.')" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                <a onclick="deleteData('.$list->id_galeri.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';

            $data[] = $row;
        }
        $output = array("data"=> $data);
        return response()->json($output);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambahGambar = new Galeri;
        $tambahGambar->nama_gambar = $request['namaGambar'];

        // Jika Memiliki Sebuah Foto
        if ($request->hasFile('gambar')) 
        {
            $gambarGaleri = $request->file('gambar');
            $namaGambar = $request['namaGambar']."".time().'.'.request()
                            ->gambar
                            ->getClientOriginalExtension();
            $lokasiPenyimpananFile = storage_path('uploads/galeri');
            
            $gambarGaleri->move($lokasiPenyimpananFile, $namaGambar);
            
            $tambahGambar->gambar = $namaGambar;
        }

        $tambahGambar->save();

        echo json_encode(array('msg'=>'success'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::find($id);
        echo json_encode($galeri);
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
        $ubahGaleri = Galeri::find($id);
        $ubahGaleri->nama_gambar = $request->namaGambar;

        // unlink(storage_path('../storage/uploads/galeri/'.$ubahGaleri->gambar));

        // Jika Memiliki Sebuah Foto/Gambar
        if ($request->hasFile('gambar')) 
        {
            $gambarGaleri = $request->file('gambar');
            $namaGambar = "Gambar".$request['namaGambar']."".time().'.'.request()
                            ->gambar
                            ->getClientOriginalExtension();
            $lokasiPenyimpananFile = storage_path('uploads/galeri');
            
            $gambarGaleri->move($lokasiPenyimpananFile, $namaGambar);
            
            $ubahGaleri->gambar = $namaGambar;
        }

        $ubahGaleri->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        $namaGambarGaleri = Galeri::where('id_galeri', $id)->pluck('gambar')->first();
        unlink(storage_path('../storage/uploads/galeri/'.$namaGambarGaleri));

        $galeri->delete();

    }
}
