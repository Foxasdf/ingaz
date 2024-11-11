<!-- resources/views/sub_voutchers/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub Voutchers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
        }
        .table-responsive-md {
            overflow-x: auto;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Sub Voutchers List</h4>
                    </div>
                    <div class="card-body p-4">
                        @if($subVoutchers->isEmpty())
                            <p class="text-center text-muted">No sub voutchers available.</p>
                        @else
                            <div class="table-responsive-md">
                                <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Passport</th>
                                            <th scope="col">Supplier</th>
                                            <th scope="col">Cost</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Sell</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($subVoutchers as $subVoutcher)
                                            <tr>
                                                <th scope="row">{{ $subVoutcher->sub_voutcher_id }}</th>
                                                <td>
                                                    @if($subVoutcher->passport)
                                                       
                                                            {{ $subVoutcher->passport}}
                                                        
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>
                                                
                                                
                                                <td>{{ $subVoutcher->suplyer }}</td>
                                                <td>{{ $subVoutcher->cost }} {{ $subVoutcher->costCoin->coin_name ?? '' }}</td>
                                                <td>{{ $subVoutcher->custumer }}</td>
                                                <td>{{ $subVoutcher->sell }} {{ $subVoutcher->sellCoin->coin_name ?? '' }}</td>
                                                <td>{{ $subVoutcher->status }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('sub_voutchers.show', $subVoutcher->sub_voutcher_id) }}" class="btn btn-outline-primary btn-sm">
                                                        <i class="fas fa-eye"></i> View
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>