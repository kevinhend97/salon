<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Reservasi;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking');
    }

    public function reservationByCustomer(Request $request)
    {
        $tambahReservasi = new Reservasi;
        
        $tambahReservasi->id_paket          = $request->idPaket;
        $tambahReservasi->nama_pemesan      = $request->namaPemesan;
        $tambahReservasi->alamat            = $request->alamat;
        $tambahReservasi->handphone         = $request->phone;
        $tambahReservasi->tanggal_reservasi = $request->tanggalReservasi;
        $tambahReservasi->jam_reservasi     = $request->jamReservasi;
        $tambahReservasi->status            = "Belum Dikonfirmasi";

        $tambahReservasi->save();

        return back()->with('success', 'Terimakasih Anda akan segera menerima SMS konfirmasi dari Kami');
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
        //
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
        //
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
    }
}
