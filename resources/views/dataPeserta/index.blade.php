@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

@section('css')
<link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">
@endsection

@stop

@section('js')
<script src="{{asset('DataTables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#dataPeserta').DataTable();
    });
</script>

@endsection

@section('content')
@include('layouts._flash')
@role('admin')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Penerimaan Siswa/Siswi Baru</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="col-lg-13">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <div class="card">
                    <div class="card-header text-light">
                        Pendaftaran
                            <a href="{{ route('dataPeserta.create')}}" class="btn btn-primary float-right">Tambah</a>
                            <a href="/admin/cetak-datapeserta" class="btn btn-primary float-right col-sm-2 ml-1"><span class="fa fa-file">&nbsp;</span> Convert PDF</a>
      <button onclick = "window.print()" class = "btn btn-primary float-right col-sm-1 ml-1"><span class = "fa fa-print">&nbsp;</span> Print</button>
</div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataPeserta">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>no pendaftaran</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1; @endphp
                                        @foreach($dataPeserta as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->no_pendaftaran }}</td>
                                            <td>{{ $data->agama }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>{{ $data->jurusan }}</td>
                                            <td>
                                        <form action="{{route('dataPeserta.destroy' ,$data->id)}}" method="post">
                                            @method('delete')
                                            @csrf


                                            <a href="{{route('dataPeserta.edit', $data->id)}}" class="btn btn-success float-right">Edit</a>
                                            <a href="{{route('dataPeserta.show', $data->id)}}" class="btn btn-warning float-right mr-2">Show</a>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            @endrole
@role('peserta')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Penerimaan Siswa/Siswi Baru</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="col-lg-13">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <div class="card">
                    <div class="card-header bg-info text-light">
                        Pendaftaran
                            <a href="{{ route('dataPeserta.create')}}" class="btn btn-danger float-right">Daftar</a>
</div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataPeserta">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>no pendaftaran</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1; @endphp
                                        @foreach($dataPeserta as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->no_pendaftaran }}</td>
                                            <td>{{ $data->agama }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>{{ $data->jurusan }}</td>
                                            <td>
                                        <form action="{{route('dataPeserta.destroy' ,$data->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{route('dataPeserta.show', $data->id)}}" class="btn btn-warning float-left mr-2">Show</a>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            @endrole

@stop

@section('css')

@stop

@section('js')

@stop
