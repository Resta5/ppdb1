@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Data Diri Calon Pendaftar

@stop

@section('content')
@include('layouts._flash')
<div class="card-body">
<form Action="{{ route('berkasPeserta.store')}}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="panel-body">
                                <label>Id Peserta</label>
                                <select name="id_peserta" class="form-control">
                                @foreach($dataPeserta as $data)
                                <option value="{{$data->id}}">{{$data->id}}</option>
                                @endforeach
                                </select>
                                </div>
        <div class="panel-body">
        <label>Fotocopy Ijazah</label>
                <input type="file" class="form-control" name="ftcpy_ijazah">
                </div>
                <div class="panel-body">
                <label>Fotokopy Akte</label>
                <input type="file" class="form-control" name="ftcpy_akte">
               </div>
               <div class="panel-body">
                                <label>Fotocopy KK</label>
                                <input type="file" class="form-control" name="ftcpy_kk">
                            </div>
                            <div class="panel-body">
                                <label>Fotocopy SKHUN</label>
                                <input type="file" class="form-control" name="ftcpy_skhun">
                            </div>
                            <div class="panel-body">
                                <label>Fotocopy Nilai Raport</label>
                                <input type="file" class="form-control" name="ftcpy_nilai_raport">
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
