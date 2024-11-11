<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Create New Journal</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('journals.store') }}" method="POST" id="journalForm">
                            @csrf
                            <div class="mb-3">
                                <label for="acount_dept" class="form-label">Dept Account</label>
                                <select name="acount_dept" id="acount_dept" class="form-select" required>
                                    @foreach($accounts as $account)
                                        <option value="{{ $account->account_id }}">{{ $account->account_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="acount_cridit" class="form-label">Credit Account</label>
                                <select name="acount_cridit" id="acount_cridit" class="form-select" required>
                                    @foreach($accounts as $account)
                                        <option value="{{ $account->account_id }}">{{ $account->account_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="cridit" class="form-label">Credit</label>
                                <input type="number" step="0.01" id="cridit" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="dept" class="form-label">Debit</label>
                                <input type="number" step="0.01" id="dept" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="coin" class="form-label">Coin</label>
                                <select name="coin" id="coin" class="form-select" required>
                                    @foreach($coins as $coin)
                                    <option value="{{ $coin->coin_id }}" data-price="{{ $coin->coin_price }}">{{ $coin->coin_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="coin_price" class="form-label">Coin Price</label>
                                <input type="number" step="0.01" name="coin_price" id="coin_price" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="cridit_after_conversion" class="form-label">Credit After Conversion</label>
                                <input type="number" step="0.01" name="cridit" id="cridit_after_conversion" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="dept_after_conversion" class="form-label">Debit After Conversion</label>
                                <input type="number" step="0.01" name="dept" id="dept_after_conversion" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="operation_date" class="form-label">Operation Date</label>
                                <input type="date" name="operation_date" id="operation_date" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="memo" class="form-label">Memo</label>
                                <textarea name="memo" id="memo" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="voutcher_id" class="form-label">Voucher</label>
                                <select name="voutcher_id" id="voutcher_id" class="form-select" required>
                                    @foreach($voutchers as $voutcher)
                                        <option value="{{ $voutcher->voutcher_id }}">{{ $voutcher->voutcher_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="passport_id" class="form-label">Passport</label>
                                <select name="passport_id" id="passport_id" class="form-select" required>
                                    @foreach($passports as $passport)
                                        <option value="{{ $passport->passport_id }}">{{$passport->first_name_e }} - {{ $passport->passport_number }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Create Journal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function updateConversions() {
                var credit = parseFloat($('#cridit').val()) || 0;
                var debit = parseFloat($('#dept').val()) || 0;
                var coinPrice = parseFloat($('#coin_price').val()) || 0;

                var creditAfterConversion = credit / coinPrice;
                var debitAfterConversion = debit / coinPrice;

                $('#cridit_after_conversion').val(creditAfterConversion.toFixed(2));
                $('#dept_after_conversion').val(debitAfterConversion.toFixed(2));
            }

            // Set default date to today
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();

            today = yyyy + '-' + mm + '-' + dd;
            $('#operation_date').val(today);

            $('#coin').change(function() {
                var selectedPrice = $(this).find(':selected').data('price');
                $('#coin_price').val(selectedPrice);
                updateConversions();
            });

            $('#cridit, #dept, #coin_price').on('input', updateConversions);

            $('#journalForm').submit(function(e) {
                e.preventDefault();
                
                // Update the coin price in the database
                var coinId = $('#coin').val();
                var newCoinPrice = $('#coin_price').val();
                
                $.ajax({
                    url: '/update-coin-price',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        coin_id: coinId,
                        new_price: newCoinPrice
                    },
                    success: function(response) {
                        // If successful, submit the form
                        $('#journalForm')[0].submit();
                    },
                    error: function(xhr, status, error) {
                        console.error("Error updating coin price:", error);
                        alert("There was an error updating the coin price. Please try again.");
                    }
                });
            });
        });
    </script>
</body>
</html>