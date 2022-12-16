@if ($errors->any())

            @foreach ($errors->all() as $error)

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
                    <strong>Error:</strong>{{ $error }}
                </div>

            @endforeach

@endif


@if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
                    <strong>Error:</strong>{{ session('error') }}
                </div>
@endif


@if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
                    <strong>Success:</strong>{{ session('success') }}
                </div>
@endif
