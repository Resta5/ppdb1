@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Data Diri Calon Pendaftar

@stop

@section('content')

<div class="card-body">
<form Action="{{ route('dataPeserta.store')}}" method="post">
             @csrf
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>No Pendaftaran</label>
                    <input type="text" class="form-control" name="no_pendaftaran" placeholder="No Pendaftaran"></text>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                <label>Tanggal Daftar</label>
                <input type="date" class="form-control" name="tgl_daftar">
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-sm-12">
                <!-- select -->
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                    <option value="jk">Pilih</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir"></text>
                </div>
            </div>
        </div>
            <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir">
            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-sm-12">
                <!-- select -->
                <div class="form-group">
                    <label>Agama</label>
                    <select name="agama" class="form-control">
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
                    <select name="asal_provinsi" class="form-control">
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
                    <select name="asal_kab_kota" class="form-control">
                    <option value="asal_kab_kota">Pilih</option>
                        <option>Bandung</option>
                        <option>Jakarta</option>
                        <option>Palembang</option>
                        <option>Denpasar</option>
                        <option>Sleman</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Select multiple-->
                <div class="form-group">
                    <label>Asal Kecamatan</label>
                    <select name="asal_desa_kelurahan" class="form-control">
                    <option value="asal_desa_kelurahan" >Pilih</option>
                        <option>Dayeuhkolot</option>
                        <option>Balaendah</option>
                        <option>Jawa Timur</option>
                        <option>DKI Jakarta</option>
                        <option>Sulawesi Barat</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea id="alamat" class="form-control" name="alamat" rows="5" cols="100"  placeholder="Alamat"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>kode_pos</label>
                    <input type="text" class="form-control" name="kode_pos" placeholder="Kode Pos">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Select multiple-->
                <div class="form-group">
                    <label>Jurusan</label>
                    <select name="jurusan" class="form-control">
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
                    <input type="text" class="form-control" name="nama_ortu" placeholder="Masukan Nama">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Pekerjaan Orang Tua</label>
                    <input type="text" class="form-control" name="pekerjaan_ortu" placeholder="Pekerjaan Orang Tua">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>No HP Orang Tua</label>
                    <input type="text" class="form-control" name="no_hp_ortu" placeholder="No Hp Orang Tua">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label>Alamat Ortu</label>
                    <textarea id="alamat_ortu" class="form-control" name="alamat_ortu" rows="5" cols="100"  placeholder="Alamat Orang Tua"></textarea>
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
