@if ($errors->any())

            @foreach ($errors->all() as $error)

                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                    <strong>Error:</strong>{{ $error }}
                </div>

            @endforeach

@endif


