@extends('layouts.admin_layout')
@section('content')


    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List of Portfolios</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">List</li>
            </ol>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Sub Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Thumbnail</th>
                        <th scope="col">Description</th>
                        <th scope="col">Client</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($portfolios) > 0)
                        @foreach ($portfolios as $portfolio)
                            <tr>
                                <th scope="row">{{ $portfolio->id }}</th>
                                <td>{{ $portfolio->title }}</td>
                                <td>{{ $portfolio->sub_title }}</td>
                                <td>
                                    <img style="height: 10vh" src="{{ url($portfolio->image) }}" alt="image">
                                </td>
                                <td>
                                    <img style="height: 10vh" src="{{ url($portfolio->thumbnail) }}" alt="thumbnail" </td>
                                <td>{{ Str::limit(strip_tags($portfolio->description), 40) }}</td>
                                <td>{{ $portfolio->client }}</td>
                                <td>{{ $portfolio->category }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}"
                                                class="btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-sm-5">
                                            <form action="{{ route('admin.portfolios.delete', $portfolio->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>

        </div>
    </main>


@endsection
