@extends('layouts.admin_layout')
@section('content')


        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Main</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Main</li>
                </ol>
                <form action="{{ route('admin.main.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-3 mt-3">
                            <h3>Background Image</h3>
                            <img style="height: 30vh" src="{{ url($main->bg_img) }}" class="img-thumbnail">
                            <input type="file" id="bg_img" name="bg_img" class="mt-3">
                        </div>
                        <div class="form-group col-md-4 mt-3">
                            <div class="mb-3">
                                <label for="title"><h3>Title</h3></label>
                                <input type="text" class="form-control" id="titile" name="title" value="{{ $main->title }}">
                            </div>
                            <div class="mb-5">
                                <label for="sub_title"><h3>Sub Title</h3></label>
                                <input type="text" class="form-control" id="sub_titile" name="sub_title" value="{{ $main->sub_title }}">
                            </div>
                            <div>
                                <h4>Upload Resume</h4>
                                <input type="file" id="resume" name="resume" class="mt-2">
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary mt-5">
                </form>
            </div>
        </main>


@endsection


