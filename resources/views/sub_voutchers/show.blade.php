<!-- resources/views/sub_voutchers/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub Voutcher Details</title>
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
                        <h4 class="mb-0">Sub Voutcher Details</h4>
                    </div>
                    <div class="card-body p-4">
                        <dl class="row">
                            <dt class="col-sm-4">ID:</dt>
                            <dd class="col-sm-8">{{ $subVoutcher->sub_voutcher_id }}</dd>

                            <dt class="col-sm-4">Main Voutcher:</dt>
                            <dd class="col-sm-8">
                                <a href="{{ route('voutchers.show', $subVoutcher->voutcher->voutcher_id) }}">
                                    {{ $subVoutcher->voutcher->voutcher_name }}
                                </a>
                            </dd>

                            <dt class="col-sm-4">Passport:</dt>
                            <dd class="col-sm-8">
                                <a href="{{ route('passports.show', $subVoutcher->passport) }}">
                                    {{ $subVoutcher->passport }}
                                </a>
                            </dd>
                            

                            <dt class="col-sm-4">Supplier:</dt>
                            <dd class="col-sm-8">{{ $subVoutcher->suplyer }}</dd>

                            <dt class="col-sm-4">Cost:</dt>
                            <dd class="col-sm-8">
                                {{ $subVoutcher->cost }} 
                                @if($subVoutcher->costCoin)
                                    <a href="{{ route('coins.show', $subVoutcher->costCoin->coin_id) }}">
                                        {{ $subVoutcher->costCoin->coin_name }}
                                    </a>
                                @else
                                    N/A
                                @endif
                            </dd>

                            <dt class="col-sm-4">Customer:</dt>
                            <dd class="col-sm-8">{{ $subVoutcher->custumer }}</dd>

                            <dt class="col-sm-4">Sell:</dt>
                            <dd class="col-sm-8">
                                {{ $subVoutcher->sell }} 
                                @if($subVoutcher->sellCoin)
                                    <a href="{{ route('coins.show', $subVoutcher->sellCoin->coin_id) }}">
                                        {{ $subVoutcher->sellCoin->coin_name }}
                                    </a>
                                @else
                                    N/A
                                @endif
                            </dd>

                            <dt class="col-sm-4">Receive Date:</dt>
                            <dd class="col-sm-8">{{ $subVoutcher->recive_date }}</dd>

                            <dt class="col-sm-4">Send Date:</dt>
                            <dd class="col-sm-8">{{ $subVoutcher->send_date }}</dd>

                            <dt class="col-sm-4">Finish Date:</dt>
                            <dd class="col-sm-8">{{ $subVoutcher->finish_date }}</dd>

                            <dt class="col-sm-4">Status:</dt>
                            <dd class="col-sm-8">{{ $subVoutcher->status }}</dd>

                            <dt class="col-sm-4">Operation Type:</dt>
                            <dd class="col-sm-8">{{ $subVoutcher->operatin_type }}</dd>
                        </dl>
                        <div class="mt-4">
                            <a href="{{ route('sub_voutchers.index') }}" class="btn btn-primary">Back to List</a>
                            <a href="{{ route('voutchers.show', $subVoutcher->voutcher->voutcher_id) }}" class="btn btn-secondary">View Main Voutcher</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>