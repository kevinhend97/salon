<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Layanan;
use App\DetailPaket;
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
        $layanan = Layanan::orderBy('nama_layanan', 'asc')->get();
        return view('admin.paket.index', compact('layanan'));
    }

    public function listData()
    {
        $layanan = Paket::orderBy('nama_paket', 'asc')->get();
        $no = 0;
        $data = array();
        foreach($layanan as $list)
        {
            $no ++;
            $row = array();
            $row[] = $no;
            $row[] = $list->nama_paket;
            $row[] = '<img src="../storage/uploads/paket/'.$list->gambar.'" class="img-thumbnail" alt="'.$list->gambar.'">';
            $row[] = $list->keterangan;
            $row[] = "Rp.".number_format($list->harga);
            $row[] = '<div class="btn-group">
                <a onclick="deleteData('.$list->id_paket.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';

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
        // Simpan Tabel Paket
        $jml = Paket::where('nama_paket', '=', $request['nama_paket'])->count();
        if($jml < 1)
        {
            $add = new Paket;
            $add->nama_paket = $request['nama_paket'];
            $add->keterangan = $request['keterangan'];
            $add->harga      = $request['harga'];

            // Jika Memiliki Sebuah Foto
            if ($request->hasFile('gambar_paket')) 
            {
                $gambarPaket = $request->file('gambar_paket');
                $namaGambarPaket = "Paket".$request['nama_paket']."".time().'.'.request()
                                ->gambar_paket
                                ->getClientOriginalExtension();
                $lokasiPenyimpananFile = storage_path('uploads/paket');
                
                $gambarPaket->move($lokasiPenyimpananFile, $namaGambarPaket);
                
                $add->gambar = $namaGambarPaket;
            }

            $add->save();

            // Simpan pada tabel Detail_Paket
            foreach($request['jenis_layanan'] as $layanan)
            {
                $simpanDetailPaket = new DetailPaket;
                $simpanDetailPaket->id_paket = $add->id_paket;
                $simpanDetailPaket->id_layanan = $layanan;
                $simpanDetailPaket->save();
            }            
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
        $ubahPaket = Paket::find($id);
        $ubahPaket->nama_paket = $request['nama_paket'];
        $ubahPaket->keterangan = $request['keterangan'];
        $ubahPaket->harga      = $request['harga'];

        // Jika Memiliki Sebuah Foto
        if ($request->hasFile('gambar_paket')) 
        {
            $gambarPaket = $request->file('gambar_paket');
            $namaGambarPaket = "Paket".$request['nama_paket']."".time().'.'.request()
                                ->gambar_paket
                                ->getClientOriginalExtension();
            $lokasiPenyimpananFile = storage_path('uploads/paket');
                
            $gambarPaket->move($lokasiPenyimpananFile, $namaGambarPaket);
                
            $ubahPaket->gambar = $namaGambarPaket;
        }

        $ubahPaket->update();

        // Simpan pada tabel Detail_Paket
        foreach($request['jenis_layanan'] as $layanan)
        {
            $ubahDetailPaket = DetailPaket::find($ubahPaket->id);

            dd($ubahDetailPaket);
        }            
        echo json_encode(array('msg'=>'success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = Paket::find($id);
        
        // Mengambil data Gambar dan menghapus Gambar
        $namaGambarPaket = Paket::where('id_paket', $id)->pluck('gambar')->first();
        if(!empty($namaGambarPaket))
        {
            unlink(storage_path('../storage/uploads/paket/'.$namaGambarPaket));
        }

        // Hapus Paket
        $paket->delete();

        // Hapus Detail Paket
        $hapusDetailPaket = DetailPaket::where('id_paket', '=', $id)->get();
        foreach ($hapusDetailPaket as $dataDetailPaket) 
        {
            $dataDetailPaket->delete();
        }
    }
}
