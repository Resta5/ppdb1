@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')


@stop

@section('content')
@include('layouts._flash')
@role('admin')
<h1>Dashboard</h1>
<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="coloumn">
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              <p style="text-align: center;">Total Pendaftar</p>
               <h3 style="text-align: center;">{{DB::table('data_pesertas')->count()}}</h3>
              </div>
               <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('dataPeserta.index')}}" class="small-box-footer" style="color: black">More info <i class="fas fa-arrow-circle-right"></i></a>

              </div>
              </div>
              </div>
<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="coloumn">
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              <p style="text-align: center;">Total berkas Pendaftar</p>
               <h3 style="text-align: center;">{{DB::table('berkas_pesertas')->count()}}</h3>


              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('berkasPeserta.index')}}" class="small-box-footer" style="color: black">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
</p>
@endrole
<h3><a href="welcome">Klik untuk kembali ke menu utama</a></h3>

@stop

@section('css')

@stop

@section('js')

@stop