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
        $('#berkasPeserta').DataTable();
    });
</script>

@endsection

@section('content')

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
                        Berkas Peserta
                        </div>
</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" id="berkasPeserta">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>ID Peserta</th>
                                            <th>Fotocopy Ijazah</th>
                                            <th>Fotocopy Akte</th>
                                            <th>Fotocopy kk</th>
                                            <th>Fotocopy kk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1; @endphp
                                        @foreach($berkasPeserta as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->id_peserta }}</td>
                                            <td><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="ftcpy_ijazah"></td>
                                            <td><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="ftcpy_akte"></td>
                                            <td><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="ftcpy_kk"></td>
                                            <td>
                                        <form action="{{route('berkasPeserta.destroy' ,$data->id)}}" method="post">
                                            @method('delete')
                                            @csrf


                                            <a href="{{route('berkasPeserta.edit', $data->id)}}" class="btn btn-success float-right">Ubah</a>
                                            <a href="{{route('berkasPeserta.show', $data->id)}}" class="btn btn-warning float-right">Show</a>
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


@stop

@section('css')

@stop

@section('js')

@stop
