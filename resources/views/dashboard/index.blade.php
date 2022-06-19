@extends('layouts.master')
@section('title','Dashboard')
@section('content')
<?php 
use App\Models\Pendopo;
use App\Models\Produktif;
use App\Models\Taman;
use App\Models\Variatif;

$pendopo = Pendopo::count();
$produktif = Produktif::count();
$taman = Taman::count();
$variatif = Variatif::count();
?>
    <div class="text-center col-sm-6 col-lg-12" style="color: black">
        <h2>DATA TANAMAN</h2>
    </div>
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="card text-dark bg-info">
            <div class="card-body pb-0">
                <h4 class="mb-0 taxt-center">
                    <span class="count">
                        <a href="{{ url('variatif') }}" style="text-decoration: none; color:black">Greenroof Variatif</a>
                    </span>
                </h4>
                <h3 class="text-center" style="color:black;">{{$variatif}}</h3>

                <div class="chart-wrapper px-0" style="height:50px;" height="70">
                    <canvas id="widgetChart2"></canvas>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card text-dark bg-warning">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">
                        <a href="{{ url('produktif') }}" style="text-decoration: none; color:black">Greenroof Produktif</a>
                    </span>
                </h4>
                <h3 class="text-center" style="color: black">{{$produktif}}</h3>

                <div class="chart-wrapper px-0" style="height:50px;" height="70">
                    <canvas id="widgetChart2"></canvas>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card text-dark bg-danger">
            <div class="card-body pb-0">
                <h4 class="mb-0 text-center">
                    <span class="count">
                        <a href="{{ url('pendopo') }}" style="text-decoration: none; color:black">Pendopo</a>
                    </span>
                </h4>
                <h3 class="text-center" style="color: black">{{$pendopo}}</h3>

                <div class="chart-wrapper px-0" style="height:50px;" height="70">
                    <canvas id="widgetChart2"></canvas>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card text-dark bg-success">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count"> 
                        <a href="{{ url('taman') }}" style="text-decoration: none; color:black">Tanaman MMD Lt.4</a>
                    </span>
                </h4>
                <h3 class="text-center" style="color: black">{{$taman}}</h3>

                <div class="chart-wrapper px-0" style="height:50px;" width="20px" height="70">
                    <canvas id="widgetChart2"></canvas>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection