@extends('layouts.admin.app')

@section('content')

<div>
    <h2>Services</h2>
</div>

<ul class="breadcrumb mt-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">Services</a></li>
    <li class="breadcrumb-item">Create</li>
</ul>

<div class="row">

    <div class="col-md-12">

        <div class="tile shadow">

            <form method="post" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
                @csrf
                @method('post')

                @include('admin.partials._errors')

                {{--name--}}
                @foreach (config('translatable.locales') as $locale)
                <div class="form-group">
                    <label>{{__('admins.'.$locale.'.Name')}} <span class="text-danger">*</span></label>
                    <input type="text" name="{{$locale}}[name]" autofocus class="form-control" value="{{ old($locale.'.name') }}">
                </div>

                <div class="form-group">
                    <label>{{__('admins.'.$locale.'.desc')}} <span class="text-danger">*</span></label>
                    <textarea type="text" name="{{$locale}}[desc]" class="form-control ckeditor">{{ old($locale.'.desc') }}</textarea>
                </div>
                @endforeach
                {{--Service--}}
                <div class="foram-group">
                    <label for="exampleInputFile">File input</label>
                    <input class="form-control-file" id="main-img" name="image" id="exampleInputFile" type="file" aria-describedby="fileHelp">
                    <small class="form-text text-muted" id="fileHelp">Service Image.</small>
                </div>

                <!-- <div class="form-group">
                    <img src="{{ asset('urlForImage')}}" width="300px" class="img-thumbnail image-preview">
                </div> -->

                <div class="form-group">
                    <img src="" id="image-preview" width="300px" />
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Create</button>
                </div>

            </form><!-- end of form -->

        </div><!-- end of tile -->

    </div><!-- end of col -->

</div><!-- end of row -->

@endsection

@push('js')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript">

    function readURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#image-preview').attr('src', e.target.result);

            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#main-img").change(function() {

        readURL(this);

    });

</script>

@endpush
