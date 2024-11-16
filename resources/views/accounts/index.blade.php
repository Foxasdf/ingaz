<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 15px;
        }

        .alert-fixed {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
            width: 30%;
        }

        div.dataTables_wrapper div.dataTables_length select {
            width: 75px;
        }
        div.dataTables_wrapper div.dataTables_filter input {
            width: 250px;
        }

        /* Style for clickable rows */
        .clickable-row {
            cursor: pointer;
        }
        .clickable-row:hover {
            background-color: #f0f0f5;
        }
    </style>
</head>
<body>

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show alert-fixed"  role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show alert-fixed" role="alert">
        {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Accounts List</h4>
                        <a href="{{ route('accounts.create') }}" class="btn btn-success">Create New Account</a>
                    </div>

                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table id="accountsTable" class="table table-hover table-bordered" style="width:100%">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Account Name</th>
                                        <th>Trading</th>
                                        <th>Visa Company</th>
                                        <th>Hotel Company</th>
                                        <th>Airline Company</th>
                                        <th>Transport Company</th>
                                        <th>Ship Company</th>
                                        <th>Insurance Company</th>
                                        <th>Customer</th>
                                        <th>Employee</th>
                                        <th>Woner</th>
                                        <th>Box</th>
                                        <th>Percentage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($accounts as $account)
                                    <tr class="clickable-row" data-href="{{ route('accounts.show', $account->account_id) }}">
                                        <td>{{ $account->account_id }}</td>
                                        <td>{{ $account->account_name }}</td>
                                        <td>{{ $account->trading ? 'Yes' : 'No' }}</td>
                                        <td>{{ $account->visa_company ? 'Yes' : 'No' }}</td>
                                        <td>{{ $account->hotel_company ? 'Yes' : 'No' }}</td>
                                        <td>{{ $account->airline_company ? 'Yes' : 'No' }}</td>
                                        <td>{{ $account->transport_company ? 'Yes' : 'No' }}</td>
                                        <td>{{ $account->ship_company ? 'Yes' : 'No' }}</td>
                                        <td>{{ $account->insurance_company ? 'Yes' : 'No' }}</td>
                                        <td>{{ $account->customer ? 'Yes' : 'No' }}</td>
                                        <td>{{ $account->employee ? 'Yes' : 'No' }}</td>
                                        <td>{{ $account->woner ? 'Yes' : 'No' }}</td>
                                        <td>{{ $account->box ? 'Yes' : 'No' }}</td>
                                        <td>{{ $account->persantage }}%</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#accountsTable',{
            lengthMenu: [10, 25, 50, 75, 100],
            pageLength: 25,
            order: [[0, 'desc']],
        });

        // Make rows clickable
        $("#accountsTable").on("click", ".clickable-row", function() {
            window.location = $(this).data("href");
        });

        //Alert fadeout after 5 seconds
        setTimeout(function () {
            $('.alert').fadeOut('slow');
        }, 4000);

    </script>
</body>
</html>
