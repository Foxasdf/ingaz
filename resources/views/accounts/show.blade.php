<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
        }
    </style>
    @if (session('success'))
    <div class="alert alert-success mt-4">
        {{ session('success') }}
    </div>
@endif
</head>
<body>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Account Details</h4>
                    </div>
                    <div class="card-body p-4">
                        <dl class="row">
                            <dt class="col-sm-4">ID:</dt>
                            <dd class="col-sm-8">{{ $account->account_id }}</dd>

                            <dt class="col-sm-4">Account Name:</dt>
                            <dd class="col-sm-8">{{ $account->account_name }}</dd>

                            <dt class="col-sm-4">Trading:</dt>
                            <dd class="col-sm-8">{{ $account->trading ? 'Yes' : 'No' }}</dd>

                            <dt class="col-sm-4">Visa Company:</dt>
                            <dd class="col-sm-8">{{ $account->visa_company ? 'Yes' : 'No' }}</dd>

                            <dt class="col-sm-4">Hotel Company:</dt>
                            <dd class="col-sm-8">{{ $account->hotel_company ? 'Yes' : 'No' }}</dd>

                            <dt class="col-sm-4">Airline Company:</dt>
                            <dd class="col-sm-8">{{ $account->airline_company ? 'Yes' : 'No' }}</dd>

                            <dt class="col-sm-4">Transport Company:</dt>
                            <dd class="col-sm-8">{{ $account->transport_company ? 'Yes' : 'No' }}</dd>

                            <dt class="col-sm-4">Ship Company:</dt>
                            <dd class="col-sm-8">{{ $account->ship_company ? 'Yes' : 'No' }}</dd>

                            <dt class="col-sm-4">Insurance Company:</dt>
                            <dd class="col-sm-8">{{ $account->insurance_company ? 'Yes' : 'No' }}</dd>

                            <dt class="col-sm-4">Customer:</dt>
                            <dd class="col-sm-8">{{ $account->customer ? 'Yes' : 'No' }}</dd>

                            <dt class="col-sm-4">Employee:</dt>
                            <dd class="col-sm-8">{{ $account->employee ? 'Yes' : 'No' }}</dd>

                            <dt class="col-sm-4">Box:</dt>
                            <dd class="col-sm-8">{{ $account->box ? 'Yes' : 'No' }}</dd>

                            <dt class="col-sm-4">Owner:</dt>
                            <dd class="col-sm-8">{{ $account->woner ? 'Yes' : 'No' }}</dd>


                            <dt class="col-sm-4">Percentage:</dt>
                            <dd class="col-sm-8">{{ $account->persantage }}%</dd>
                        </dl>

                        <h5 class="mt-4">Journal Entries (Debit):</h5>
                        @if($account->journalDepts->isEmpty())
                            <p>No debit journal entries for this account.</p>
                        @else
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Memo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($account->journalDepts as $journal)
                                            <tr>
                                                <td>{{ $journal->operation_date }}</td>
                                                <td>{{ $journal->dept }}</td>
                                                <td>{{ $journal->memo }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif

                        <h5 class="mt-4">Journal Entries (Credit):</h5>
                        @if($account->journalCredits->isEmpty())
                            <p>No credit journal entries for this account.</p>
                        @else
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Memo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($account->journalCredits as $journal)
                                            <tr>
                                                <td>{{ $journal->operation_date }}</td>
                                                <td>{{ $journal->cridit }}</td>
                                                <td>{{ $journal->memo }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif

                        <div class="mt-4">
                            <a href="{{ route('accounts.index') }}" class="btn btn-primary">Back to List</a>
                            <a href="{{ route('accounts.edit', $account->account_id) }}" class="btn btn-secondary">Edit Account</a>
                            @if (!$account->journalDepts()->exists() && !$account->journalCredits()->exists())
                                <form action="{{ route('accounts.destroy', $account->account_id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete Account</button>
                                </form>
                            @endif
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
