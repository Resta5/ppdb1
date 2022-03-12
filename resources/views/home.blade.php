@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

<h1>Dashboard</h1>

@stop

@section('content')
@role('admin')
<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              <p style="text-align: center;">Total Pendaftar</p>
               <h3 style="text-align: center;">{{DB::table('data_pesertas')->count()}}</h3>

                          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('dataPeserta.index')}}" class="small-box-footer" style="color: black">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
</p>
<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
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
              <a href="{{route('dataPeserta.index')}}" class="small-box-footer" style="color: black">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
</p>
@endrole

<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
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
              <a href="welcome" class="small-box-footer" style="color: black">Kembali ke halaman utama <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
</p>

@stop

@section('css')

@stop

@section('js')

@stop
