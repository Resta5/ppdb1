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
                    <input type="text" class="form-control" name="nama" value="{{$dataPeserta->nama}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>No Pendaftaran</label>
                    <input type="text" class="form-control" name="no_pendaftaran" value="{{$dataPeserta->no_pendaftaran}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                <label>Tanggal Daftar</label>
                <input type="date" class="form-control" name="tgl_daftar" value="{{$dataPeserta->tgl_daftar}}">
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-sm-12">
                <!-- select -->
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jk" class="form-control" value="{{$dataPeserta->jk}}">
                    <option value="jk">Pilih</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
            </div>
            </div>
<div class="row">
            <div class="col-sm-12">
                <!-- select -->
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <select name="tempat_lahir" class="form-control" value="{{$dataPeserta->tempat_lahir}}">
                    <option value="tempat_lahir">Pilih</option>
                        <option>Bandung</option>
                        <option>Jakarta</option>
                        <option>Bali</option>
                        <option>Yogyakarta</option>
                        <option>Bogor</option>
                    </select>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" value="{{$dataPeserta->tgl_lahir}}">
            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-sm-12">
                <!-- select -->
                <div class="form-group">
                    <label>Agama</label>
                    <select name="agama" class="form-control" value="{{$dataPeserta->agama}}">
                    <option value="agama" >Pilih</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindhu</option>
                        <option>konguchu</option>
                        <option>Gak punya</option>
                    </select>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
                <!-- Select multiple-->
                <div class="form-group">
                    <label>Asal Provinsi</label>
                    <select name="asal_provinsi" class="form-control" value="{{$dataPeserta->asal_provinsi}}">
                    <option value="asal_provinsi" >Pilih</option>
                        <option>Jawa Barat</option>
                        <option>Jawa Tengah</option>
                        <option>Jawa Timur</option>
                        <option>DKI Jakarta</option>
                        <option>Sulawesi Barat</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Select multiple-->
                <div class="form-group">
                    <label>Asal Kota</label>
                    <select name="asal_kab_kota" class="form-control" value="{{$dataPeserta->asal_kab_kota}}">
                    <option value="asal_kab_kota">Pilih</option>
                        <option>Bandung</option>
                        <option>Jakarta</option>
                        <option>Palembang</option>
                        <option>Denpasar</option>
                        <option>Yogyakarta</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Select multiple-->
                <div class="form-group">
                    <label>Asal Kecamatan</label>
                    <select name="asal_desa_kelurahan" class="form-control" value="{{$dataPeserta->asal_desa_kelurahan}}">
                    <option value="asal_desa_kelurahan" >Pilih</option>
                        <option>Dayeuhkolot</option>
                        <option>Balaendah</option>
                        <option>Banyuwangi</option>
                        <option>Setiabudi</option>
                        <option>Tegalrejo</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{$dataPeserta->alamat}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>kode_pos</label>
                    <input type="text" class="form-control" name="kode_pos" value="{{$dataPeserta->kode_pos}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Select multiple-->
                <div class="form-group">
                    <label>Jurusan</label>
                    <select name="jurusan" class="form-control" value="{{$dataPeserta->jurusan}}">
                    <option value="jurusan" >Pilih</option>
                        <option>RPL</option>
                        <option>TATABOGA</option>
                        <option>TBSM</option>
                        <option>MULTIMEDIA</option>
                        <option>TKR</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Nama Orang Tua</label>
                    <input type="text" class="form-control" name="nama_ortu" value="{{$dataPeserta->nama_ortu}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Pekerjaan Orang Tua</label>
                    <input type="text" class="form-control" name="pekerjaan_ortu" value="{{$dataPeserta->pekerjaan_ortu}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>No HP Orang Tua</label>
                    <input type="text" class="form-control" name="no_hp_ortu" value="{{$dataPeserta->no_hp_ortu}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Alamat Ortu</label>
                    <input type="text" class="form-control" name="alamat_ortu" value="{{$dataPeserta->alamat_ortu}}">
                </div>
            </div>
        </div>
            </div>
        </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Next</button>
            </div>
        </form>
</div>

</div>

</div>

@stop

@section('css')

@stop

@section('js')

@stop