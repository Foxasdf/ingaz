<!-- resources/views/voutchers/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voutcher App</title>
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
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Voutchers List</h4>
                    </div>
                    <div class="card-body p-4">
                        @if($voutchers->isEmpty())
                            <p class="text-center text-muted">No voutchers available.</p>
                        @else
                            <table class="table table-hover table-responsive-md">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Number 1</th>
                                        <th scope="col">Number 2</th>
                                        <th scope="col">Date</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($voutchers as $voutcher)
                                        <tr>
                                            <th scope="row">{{ $voutcher->voutcher_id }}</th>
                                            <td>{{ $voutcher->voutcher_name }}</td>
                                            <td>{{ $voutcher->voutcher_number1 }}</td>
                                            <td>{{ $voutcher->voutcher_number2 }}</td>
                                            <td>{{ $voutcher->voutcher_date }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('voutchers.show', $voutcher->voutcher_id) }}" class="btn btn-outline-primary btn-sm">
                                                    <i class="fas fa-eye"></i> View
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>