<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal Details</title>
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
                        <h4 class="mb-0">Journal Details</h4>
                    </div>
                    <div class="card-body p-4">
                        <dl class="row">
                            <dt class="col-sm-4">ID:</dt>
                            <dd class="col-sm-8">{{ $journal->journal_id }}</dd>

                            <dt class="col-sm-4">Dept Account:</dt>
                            <dd class="col-sm-8">
                                @if($journal->deptAccount)
                                    <a href="{{ route('accounts.show', $journal->deptAccount->account_id) }}">
                                        {{ $journal->deptAccount->account_name }}
                                    </a>
                                @else
                                    N/A
                                @endif
                            </dd>

                            <dt class="col-sm-4">Credit Account:</dt>
                            <dd class="col-sm-8">
                                @if($journal->creditAccount)
                                    <a href="{{ route('accounts.show', $journal->creditAccount->account_id) }}">
                                        {{ $journal->creditAccount->account_name }}
                                    </a>
                                @else
                                    N/A
                                @endif
                            </dd>

                            <dt class="col-sm-4">Debit:</dt>
                            <dd class="col-sm-8">{{ $journal->dept }}</dd>

                            <dt class="col-sm-4">Credit:</dt>
                            <dd class="col-sm-8">{{ $journal->cridit }}</dd>
                            <dt class="col-sm-4">Coin:</dt>
                            <dd class="col-sm-8">
                                @if($journal->coinRelation)
                                <a href="{{ route('coins.show', $journal->coinRelation->coin_id) }}">
                                    {{ $journal->coinRelation->coin_name }}
                                </a>
                            @else
                                N/A
                            @endif
                            </dd>
                            <dt class="col-sm-4">Coin Price:</dt>
                            <dd class="col-sm-8">{{ $journal->coin_price }}</dd>

                            <dt class="col-sm-4">Operation Date:</dt>
                            <dd class="col-sm-8">{{ $journal->operation_date }}</dd>

                            <dt class="col-sm-4">Memo:</dt>
                            <dd class="col-sm-8">{{ $journal->memo }}</dd>

                            <dt class="col-sm-4">Voutcher:</dt>
                            <dd class="col-sm-8">
                                @if($journal->voutcher)
                                    <a href="{{ route('voutchers.show', $journal->voutcher->voutcher_id) }}">
                                        {{ $journal->voutcher->voutcher_name }}
                                    </a>
                                @else
                                    N/A
                                @endif
                            </dd>

                            <dt class="col-sm-4">Passport:</dt>
                            <dd class="col-sm-8">
                                @if($journal->passport)
                                    <a href="{{ route('passports.show', $journal->passport->passport_id) }}">
                                        {{ $journal->passport->passport_number }}
                                    </a>
                                @else
                                    N/A
                                @endif
                            </dd>
                        </dl>
                        <div class="mt-4">
                            <a href="{{ route('journals.index') }}" class="btn btn-primary">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>