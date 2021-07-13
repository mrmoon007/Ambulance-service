@extends('backend.layouts.master')

@section('title')

@endsection


@section('css')

@endsection

@section('content')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            @php
                $sliderCount = DB::table('sliders')->count();
            @endphp
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{ $sliderCount }}</h2>
                        <p>Total Slider Image</p>
                        <div class="chartjs-wrapper">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                @php
                    $serviceCount = DB::table('services')->count();
                @endphp
                <div class="card card-mini  mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{ $serviceCount }}</h2>
                        <p>Total Services</p>
                        <div class="chartjs-wrapper">
                            <canvas id="dual-line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    @php
                        $aboutCount = DB::table('abouts')->count();
                    @endphp
                    <div class="card-body">
                        <h2 class="mb-1">{{ $aboutCount }}</h2>
                        <p>Total About Image</p>
                        <div class="chartjs-wrapper">
                            <canvas id="area-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    @php
                        $portfolioCount = DB::table('portfolios')->count();
                    @endphp
                    <div class="card-body">
                        <h2 class="mb-1">{{ $portfolioCount }}</h2>
                        <p>Total Portfolio Image</p>
                        <div class="chartjs-wrapper">
                            <canvas id="line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

    </div>
@endsection

@section('script')

@endsection
