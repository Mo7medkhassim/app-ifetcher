@extends('layouts.admin.app')

@section('content')

<div>
    <h2>Categoeries</h2>
</div>

<ul class="breadcrumb mt-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categories</a></li>
    <li class="breadcrumb-item">Edit</li>
</ul>

<div class="row">

    <div class="col-md-12">

        <div class="tile shadow">

            <form method="post" action="{{ route('admin.categories.update',$category->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('admin.partials._errors')

                {{--name--}}
                @foreach (config('translatable.locales') as $locale)
                <div class="form-group">
                    <label>{{__('admins.'.$locale.'.Name')}} <span class="text-danger">*</span></label>
                    <input type="text" name="{{$locale}}[name]" autofocus class="form-control" value="{{ $category->translate($locale)->name }}" >
                </div>
                @endforeach
                <!-- <div class="form-group">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" autofocus class="form-control" value="{{ $category->name }}" required>
                </div> -->
                {{-- Image--}}
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input id="main-img" type="file" name="newimage" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="client">
                    <!-- <input class="form-control-file" name="image" id="main-img" type="file" aria-describedby="fileHelp"> -->
                    <small class="form-text text-muted" id="fileHelp">Category Image.</small>
                </div>
                <!-- old image -->
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label> Old image </label>

                            <img src="{{asset('storage/'.$category->image)}}" width="70" class="img-fluid">
                        </div>

                    </div>
                    <!-- old image -->

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
