@extends('layouts.admin.app')

@section('content')


    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard Statas</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-sm-6 ">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Users</h4>
                    <p><b>5</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 ">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
                <div class="info">
                    <h4>Categories</h4>
                    <p><b>25</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 ">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                <div class="info">
                    <h4>Servies</h4>
                    <p><b>10</b></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 ">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>Projects</h4>
                    <p><b>500</b></p>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')


@endpush
