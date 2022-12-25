@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Abouts</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <form action="{{ route('admin.about.update', $abouts->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>Image</h3>
                        <img style="height: 30vh" src="{{ url($abouts->image) }}" class="img-thumbnail">
                        <input type="file" name="image" class="mt-3">
                    </div>

                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title">
                                <h3>Title 1</h3>
                            </label>
                            <input type="text" class="form-control" id="titile1" name="title1"
                                value="{{ $abouts->title1 }}">
                        </div>
                        <div class="mb-5">
                            <label for="sub_title">
                                <h3>Title 2</h3>
                            </label>
                            <input type="text" class="form-control" id="titile2" name="title2"
                                value="{{ $abouts->title2 }}">
                        </div>
                    </div>

                    <div class="form-group col-md-4 mt-3">
                        <div>
                            <h3>Description</h3>
                            <textarea class="form-control" name="description" rows="10">{{ $abouts->description }}</textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5" value="Update">
            </form>
        </div>
    </main>
@endsection
