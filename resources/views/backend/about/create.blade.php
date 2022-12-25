@extends('layouts.admin_layout')
@section('content')
    {{-- <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>Project Image</h3>
                        <img style="height: 30vh" src="#" class="img-thumbnail">
                        <input type="file" name="image" class="mt-3">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <h3>Project Thumbnail</h3>
                        <img style="height: 20vh" src="#" class="img-thumbnail">
                        <input type="file" name="thumbnail" class="mt-3">
                    </div>

                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title">
                                <h3>Title</h3>
                            </label>
                            <input type="text" class="form-control" id="titile" name="title" value="">
                        </div>
                        <div class="mb-5">
                            <label for="sub_title">
                                <h3>Sub Title</h3>
                            </label>
                            <input type="text" class="form-control" id="sub_titile" name="sub_title" value="">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <h3>Description</h3>
                        <textarea class="form-control" name="description" rows="10"></textarea>
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="client">
                                <h3>Client</h3>
                            </label>
                            <input type="text" class="form-control" id="client" name="client" value="">
                        </div>
                        <div class="mb-5">
                            <label for="category">
                                <h3>Category</h3>
                            </label>
                            <input type="text" class="form-control" id="category" name="category" value="">
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary my-5">
            </form>
        </div>
    </main> --}}
@endsection
