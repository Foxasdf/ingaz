<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journals</title>
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
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Journals List</h4>
                        <a href="{{ route('journals.create') }}" class="btn btn-light">Add New Journal</a>
                    </div>
                    <div class="card-body p-4">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if($journals->isEmpty())
                            <p class="text-center text-muted">No journals available.</p>
                        @else
                            <div class="table-responsive-md">
                                <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Dept Account</th>
                                            <th scope="col">Credit Account</th>
                                            <th scope="col">Debit</th>
                                            <th scope="col">Credit</th>
                                            <th scope="col">Date</th>
                                            <th scope="col" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($journals as $journal)
                                            <tr>
                                                <th scope="row">{{ $journal->journal_id }}</th>
                                                <td>{{ $journal->deptAccount->account_name ?? 'N/A' }}</td>
                                                <td>{{ $journal->creditAccount->account_name ?? 'N/A' }}</td>
                                                <td>{{ $journal->dept }}</td>
                                                <td>{{ $journal->cridit }}</td>
                                                <td>{{ $journal->operation_date }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('journals.show', $journal->journal_id) }}" class="btn btn-outline-primary btn-sm">
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