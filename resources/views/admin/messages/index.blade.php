@extends('layouts.admin.app')

@section('content')

<div>
    <h2>Messages</h2>
</div>

<ul class="breadcrumb mt-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="">messages</a></li>
    <li class="breadcrumb-item">Show</li>
</ul>



<div class="row">

    <div class="col-md-12">

        <div class="tile shadow">

            <div class="row mb-2">

                <div class="col-md-12">

                    @if (auth()->user()->hasPermission('read_admins'))
                    <a href="" class="btn btn-primary"><i class="fa fa-plus"></i>create</a>
                    @endif

                </div>

            </div><!-- end of row -->



            <div class="row">

                <div class="col-md-12">

                    <div class="table-responsive">

                        <table class="table datatable" id="actors-table" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Date </th>
                                    <th>Name</th>
                                    <th>phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @forelse ($messages as $message)
                                <?php $i++; ?>
                                <tr>
                                    <td> {{ $message -> created_at->format('d.m.Y') }}</td>
                                    <td> {{ $message->name }}</td>
                                    <td> {{ $message->phone }}</td>
                                    <td>


                                        <a type="submit" href="{{ route('admin.messages.show', $message->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Show</a>
                                        <form method="post" action="" style="display: inline-block;">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="record_ids" id="record-ids">
                                            <button type="submit" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i> {{__('admins.delete') }}</button>
                                        </form><!-- end of form -->


                                    </td>

                                </tr>
                                @empty
                                <div class="alert alert-info"> There is no messages , please add new one </div>
                                @endforelse
                            </tbody>
                        </table>

                    </div><!-- end of table responsive -->

                </div><!-- end of col -->

            </div><!-- end of row -->

        </div><!-- end of tile -->

    </div><!-- end of col -->

</div><!-- end of row -->

@endsection
