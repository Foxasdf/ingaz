<!-- resources/views/voutcher_types/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voutcher Type Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>
<body>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Voutcher Type Details</h4>
                    </div>
                    <div class="card-body p-4">
                        <dl class="row">
                            <dt class="col-sm-3">ID:</dt>
                            <dd class="col-sm-9">{{ $voutcherType->type_id }}</dd>

                            <dt class="col-sm-3">Type:</dt>
                            <dd class="col-sm-9">{{ $voutcherType->voutcher_type }}</dd>
                        </dl>
                        <h5 class="mt-4">Associated Voutchers:</h5>
                        @if($voutcherType->voutchers->isEmpty())
                            <p>No voutchers associated with this type.</p>
                        @else
                            <ul>
                                @foreach($voutcherType->voutchers as $voutcher)
                                    <li>
                                        <a href="{{ route('voutchers.show', $voutcher->voutcher_id) }}">
                                            {{ $voutcher->voutcher_name }} (ID: {{ $voutcher->voutcher_id }})
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        <a href="{{ route('voutcher_types.index') }}" class="btn btn-primary mt-3">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>