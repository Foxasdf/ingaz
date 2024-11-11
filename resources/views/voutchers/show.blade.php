<!-- resources/views/voutchers/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voutcher Details</title>
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
                        <h4 class="mb-0">Voutcher Details</h4>
                    </div>
                    <div class="card-body p-4">
                        <dl class="row">
                            <dt class="col-sm-3">ID:</dt>
                            <dd class="col-sm-9">{{ $voutcher->voutcher_id }}</dd>

                            <dt class="col-sm-3">Name:</dt>
                            <dd class="col-sm-9">{{ $voutcher->voutcher_name }}</dd>

                            <dt class="col-sm-3">Number 1:</dt>
                            <dd class="col-sm-9">{{ $voutcher->voutcher_number1 }}</dd>

                            <dt class="col-sm-3">Number 2:</dt>
                            <dd class="col-sm-9">{{ $voutcher->voutcher_number2 }}</dd>

                            <dt class="col-sm-3">Address:</dt>
                            <dd class="col-sm-9">{{ $voutcher->address }}</dd>

                            <dt class="col-sm-3">Date:</dt>
                            <dd class="col-sm-9">{{ $voutcher->voutcher_date }}</dd>

                            <dt class="col-sm-3">Phone:</dt>
                            <dd class="col-sm-9">{{ $voutcher->voucher_phone }}</dd>

                            <dt class="col-sm-3">Account:</dt>
                            <dd class="col-sm-9">{{ $voutcher->account }}</dd>

                            <dt class="col-sm-3">Type:</dt>
                            <dd class="col-sm-9">
                                @if($voutcher->voutcherType)
                                    <a href="{{ route('voutcher_types.show', $voutcher->voutcherType->type_id) }}">
                                        {{ $voutcher->voutcherType->voutcher_type }}
                                    </a>
                                @else
                                    No type assigned
                                @endif
                            </dd>
                        </dl>
                        <a href="{{ route('voutchers.index') }}" class="btn btn-primary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>