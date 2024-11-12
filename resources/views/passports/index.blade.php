<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passports</title>
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
                        <h4 class="mb-0">Passports List</h4>
                    </div>
                    <div class="card-body p-4">
                        @if($passports->isEmpty())
                            <p class="text-center text-muted">No passports available.</p>
                        @else
                            <div class="table-responsive-md">
                                <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Full Name (Arabic)</th>
                                            <th scope="col">Full Name (English)</th>
                                            <th scope="col">Passport Number</th>
                                            <th scope="col">Nationality</th>
                                            <th scope="col" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($passports as $passport)
                                            <tr>
                                                <th scope="row">{{ $passport->passport_id }}</th>
                                                <td>{{ $passport->first_name_a }} {{ $passport->father_name_a }} {{ $passport->g_father_name_a }} {{ $passport->last_name_a }}</td>
                                                <td>{{ $passport->first_name_e }} {{ $passport->father_name_e }} {{ $passport->g_father_name_e }} {{ $passport->last_name_e }}</td>
                                                <td>{{ $passport->passport_number }}</td>
                                                <td>{{ $passport->nationalty }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('passports.show', $passport->passport_number) }}" class="btn btn-outline-primary btn-sm">
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