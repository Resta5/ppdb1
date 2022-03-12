@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')


@stop

@section('content')

@include('layouts._flash')
<div class="card-body">
<form Action="{{ route('dataPeserta.update', $dataPeserta->id)}}" method="post">
             @csrf
             @method('put')
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{$dataPeserta->nama}}" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>No Pendaftaran</label>
                    <input type="text" class="form-control" name="no_pendaftaran" value="{{$dataPeserta->no_pendaftaran}}" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                <label>Tanggal Daftar</label>
                <input type="text" class="form-control" name="tgl_daftar" value="{{$dataPeserta->tgl_daftar}}" disabled>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jk" value="{{$dataPeserta->jk}}" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="{{$dataPeserta->tempat_lahir}}" disabled>
                </div>
            </div>
        </div>
            <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" class="form-control" name="tgl_lahir" value="{{$dataPeserta->tgl_lahir}}" disabled>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Agama</label>
                    <input type="text" class="form-control" name="agama" value="{{$dataPeserta->agama}}" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>No Pendaftaran</label>
                    <input type="text" class="form-control" name="asal_provinsi" value="{{$dataPeserta->asal_provinsi}}" disabled>
                </div>
            </div>
        </div>     
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Asal Kota</label>
                    <input type="text" class="form-control" name="asal_kab_kota" value="{{$dataPeserta->asal_kab_kota}}" disabled>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Asal Desa</label>
                    <input type="text" class="form-control" name="asal_desa_kelurahan" value="{{$dataPeserta->asal_desa_kelurahan}}" disabled>
                </div>
            </div>
        </div>               

        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{$dataPeserta->alamat}}" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>kode_pos</label>
                    <input type="text" class="form-control" name="kode_pos" value="{{$dataPeserta->kode_pos}}" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" value="{{$dataPeserta->jurusan}}" disabled>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Nama Orang Tua</label>
                    <input type="text" class="form-control" name="nama_ortu" value="{{$dataPeserta->nama_ortu}}" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Pekerjaan Orang Tua</label>
                    <input type="text" class="form-control" name="pekerjaan_ortu" value="{{$dataPeserta->pekerjaan_ortu}}" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>No HP Orang Tua</label>
                    <input type="text" class="form-control" name="no_hp_ortu" value="{{$dataPeserta->no_hp_ortu}}" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Alamat Ortu</label>
                    <input type="text" class="form-control" name="alamat_ortu" value="{{$dataPeserta->alamat_ortu}}" disabled>
                </div>
            </div>
        </div>
            </div>
        </div>
            <a href="{{route('dataPeserta.index')}}" class="btn btn-success float-right"> Kembali</a>
        </form>
</div>

</div>

</div>

@stop

@section('css')

@stop

@section('js')

@stop