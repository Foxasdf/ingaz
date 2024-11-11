<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passport Details</title>
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
                        <h4 class="mb-0">Passport Details</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-4 text-center mb-3">
                                <img src="{{ asset('storage/' . $passport->photo) }}" alt="Passport Photo" class="img-fluid rounded">
                            </div>
                            <div class="col-md-8">
                                <dl class="row">
                                    <dt class="col-sm-4">Full Name (Arabic):</dt>
                                    <dd class="col-sm-8">{{ $passport->first_name_a }} {{ $passport->father_name_a }} {{ $passport->g_father_name_a }} {{ $passport->last_name_a }}</dd>

                                    <dt class="col-sm-4">Full Name (English):</dt>
                                    <dd class="col-sm-8">{{ $passport->first_name_e }} {{ $passport->father_name_e }} {{ $passport->g_father_name_e }} {{ $passport->last_name_e }}</dd>

                                    <dt class="col-sm-4">Mother's Name:</dt>
                                    <dd class="col-sm-8">{{ $passport->mother_name }}</dd>

                                    <dt class="col-sm-4">Birth Date:</dt>
                                    <dd class="col-sm-8">{{ $passport->birth_date }}</dd>

                                    <dt class="col-sm-4">Birth Place:</dt>
                                    <dd class="col-sm-8">{{ $passport->birth_place }}</dd>

                                    <dt class="col-sm-4">Nationality:</dt>
                                    <dd class="col-sm-8">{{ $passport->nationalty }}</dd>

                                    <dt class="col-sm-4">Issue Date:</dt>
                                    <dd class="col-sm-8">{{ $passport->issue_date }}</dd>

                                    <dt class="col-sm-4">Expiry Date:</dt>
                                    <dd class="col-sm-8">{{ $passport->issue_end }}</dd>

                                    <dt class="col-sm-4">Issue Place:</dt>
                                    <dd class="col-sm-8">{{ $passport->issue_place }}</dd>

                                    <dt class="col-sm-4">Passport Number:</dt>
                                    <dd class="col-sm-8">{{ $passport->passport_number }}</dd>

                                    <dt class="col-sm-4">Sex:</dt>
                                    <dt class="col-sm-4">Sex:</dt>
                                    <dd class="col-sm-8">{{ $passport->sex }}</dd>

                                    <dt class="col-sm-4">National Number:</dt>
                                    <dd class="col-sm-8">{{ $passport->national_number }}</dd>
                                </dl>
                            </div>
                        </div>

                        <h5 class="mt-4">Related Journal Entries:</h5>
                        @if($passport->journals->isEmpty())
                            <p>No journal entries associated with this passport.</p>
                        @else
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Debit</th>
                                            <th>Credit</th>
                                            <th>Memo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($passport->journals as $journal)
                                            <tr>
                                                <td>{{ $journal->operation_date }}</td>
                                                <td>{{ $journal->dept }}</td>
                                                <td>{{ $journal->cridit }}</td>
                                                <td>{{ $journal->memo }}</td>
                                                <td>
                                                    <a href="{{ route('journals.show', $journal->journal_id) }}" class="btn btn-outline-primary btn-sm">
                                                        View
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif

                        <div class="mt-4">
                            <a href="{{ route('passports.index') }}" class="btn btn-primary">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>