@extends('layouts.admin.app')

@section('content')

<div>
    <h2>Stores</h2>
</div>

<ul class="breadcrumb mt-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.stores.index') }}">Stores</a></li>
    <li class="breadcrumb-item">Edit</li>
</ul>

<div class="row">

    <div class="col-md-12">

        <div class="tile shadow">

            <form method="post" action="{{ route('admin.stores.update',$store->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('admin.partials._errors')

                <!-- category -->
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">Select category </option>
                        @foreach ( $categories as $category )
                        <option value="{{ $category->id }}" {{ $store->category->id == $category->id ? 'selected' : '' }}>{{$category->name}}  </option>
                        @endforeach
                    </select>
                </div><!-- end category -->

                <!-- services -->
                <div class="form-group">
                    <label for="service_id">Service</label>
                    <select name="service_id" id="service_id" class="form-control">
                    </select>
                </div><!-- end of services -->


                {{--name--}}
                @foreach (config('translatable.locales') as $locale)

                <div class="form-group">
                    <label>{{__('admins.'.$locale.'.Name')}} <span class="text-danger">*</span></label>
                    <input type="text" name="{{$locale}}[name]" autofocus class="form-control" value="{{ $store->name }}">
                </div>

                <div class="form-group">
                    <label>{{__('admins.'.$locale.'.place')}} <span class="text-danger">*</span></label>
                    <input type="text" name="{{$locale}}[place]" autofocus class="form-control" value="{{ $store->place }}">
                </div>

                <div class="form-group">
                    <label>{{__('admins.'.$locale.'.desc')}} <span class="text-danger">*</span></label>
                    <textarea type="text" name="{{$locale}}[desc]" class="form-control ckeditor"> {{ $store->desc }} </textarea>
                </div>

                @endforeach

                <!-- email -->
                <div class="form-group">
                    <label>{{__('admins.'.$locale.'.email')}} <span class="text-danger">*</span></label>
                    <input type="email" name="email" autofocus class="form-control" value="{{ $store->email }}">
                </div> <!-- end of email -->

                <!-- phone -->
                <div class="form-group">
                    <label>{{__('admins.'.$locale.'.phone')}} <span class="text-danger">*</span></label>
                    <input type="text" name="phone" autofocus class="form-control" value="{{ $store->phone }}">
                </div> <!-- end of phone -->

                <!-- link -->
                <div class="form-group">
                    <label>{{__('admins.link')}} <span class="text-danger">*</span></label>
                    <input type="text" name="link" autofocus class="form-control" value="{{ $store->link }}">
                </div> <!-- end of link -->


                {{-- logo --}}
                <div class="form-group">
                    <label for="exampleInputFile">Store Logo </label>
                    <input id="main-img" type="file" name="logo" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="client">
                    <!-- <small class="form-text text-muted" id="fileHelp">store Image.</small> -->
                </div>

                {{-- Image--}}
                <div class="form-group">
                    <label for="exampleInputFile">Store Image </label>
                    <input id="" type="file" name="image" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="client">
                    <!-- <small class="form-text text-muted" id="fileHelp">store Image.</small> -->
                </div>

                <!-- old image -->
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label> Old image </label>
                            <img src="{{ asset('/storage/'.$store->image )}}" width="70" class="img-fluid">
                        </div>

                    </div>
                </div>
                <!-- old image -->

                <!-- new iamge -->

                <div class="form-group">
                    <img src="" width="300px" class="img-thumbnail image-preview">
                </div>

                <!-- new iamge -->

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Create</button>
        </div>

        </form><!-- end of form -->

    </div><!-- end of tile -->

</div><!-- end of col -->

</div><!-- end of row -->

@endsection

@push('scripts')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



<script type="text/javascript">
    $('#category_id').change(function() {
        var category_id = $(this).val();
        // alert(category_id);
        $.ajax({
            url: "{{ route('admin.append_services') }}?category_id=" + category_id,
            method: "get",
            success: function(data) {
                $('#service_id').html(data.html);
                // alert(data);
            }
        });
    });

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
