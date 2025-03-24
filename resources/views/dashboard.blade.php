@extends('layouts.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box text-bg-primary">
                    <div class="inner">
                        <h3>150</h3>
                        <p>New Orders</p>
                    </div>
                    <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24">
                        <!-- SVG path -->
                    </svg>
                    <a href="#" class="small-box-footer link-light">More info <i class="bi bi-link-45deg"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- Add other small boxes or content here -->
            </div>
        </div>
    </div>
@endsection
