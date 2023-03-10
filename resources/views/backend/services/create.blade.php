@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create Services</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title">
                                <h3>Title</h3>
                            </label>
                            <input type="text" class="form-control" id="titile" name="title">
                        </div>
                        <div class="mb-5">
                            <label for="description">
                                <h3>Description</h3>
                            </label>
                            <textarea type="text" class="form-control" id="description" name="description"></textarea>
                        </div>
                        <div class="mb-5">
                            <label for="icon">
                                <h3>Font Awesome Icon</h3>
                            </label>
                            <input type="text" class="form-control" id="icon" name="icon">
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">
            </form>
        </div>
    </main>
@endsection
