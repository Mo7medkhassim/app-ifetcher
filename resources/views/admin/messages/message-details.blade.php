@extends('layouts.admin.app')

@section('content')

<div>
    <h2>Message Details</h2>
</div>

<ul class="breadcrumb mt-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.messages.index') }}">messages</a></li>
    <li class="breadcrumb-item">Show</li>
</ul>

<div class="row">

    <div class="col-md-12">

        <div class="tile shadow">



        </div><!-- end of tile -->

    </div><!-- end of col -->

</div><!-- end of row -->

@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



@endpush
