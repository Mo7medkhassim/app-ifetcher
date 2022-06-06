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
                    @if($users && $users->count() > 0)
                    <p><b> {{ $users->count() }} </b></p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-sm-6 ">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>Servies</h4>
                    @if( $services && $services->count() > 0 )
                    <p><b> {{ $services->count() }} </b></p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-sm-6 ">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                <div class="info">
                    <h4>Messages</h4>
                    @if($messages && $messages->count() > 0)
                    <p><b> {{ $messages->count() }} </b></p>
                    @endif
                </div>
            </div>
        </div>

    </div>


@endsection

@push('scripts')


@endpush
