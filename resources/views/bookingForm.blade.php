@extends('layouts.default')
@section('title')Form Reservasi @strpos
@section('css')
@stop
@section('content')
<!-- form Reservasi -->
<form action="" method="POST" class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-2 control-label">Layanan/Paket</label>
        <div class="col-sm-10">
            <select id="disabledSelect" class="form-control">
                <option>Nama Paket</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Nama Anda</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama Anda">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="3"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">No Hp</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="No Hp">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Reservasi</label>
        <div class="col-sm-10">
            <input type="date" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Jam Reservasi</label>
        <div class="col-sm-10">
            <input type="time" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<!-- akhir form reservasi -->
@stop
@section('script')
@stop