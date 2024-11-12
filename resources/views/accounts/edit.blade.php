<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
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
                        <h4 class="mb-0">Edit Account</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('accounts.update', $account->account_id) }}" method="POST" id="account-form">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="account_name" class="form-label">Account Name:</label>
                                <input type="text" class="form-control" id="account_name" name="account_name" value="{{ $account->account_name }}">
                            </div>

                            <div class="mb-3">
                                <label for="trading" class="form-label">Trading:</label>
                                <select class="form-select" id="trading" name="trading" onchange="toggleOptions()">
                                    <option value="0" {{ $account->trading == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $account->trading == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="visa_company" class="form-label">Visa Company:</label>
                                <select class="form-select" id="visa_company" name="visa_company">
                                    <option value="0" {{ $account->visa_company == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $account->visa_company == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="hotel_company" class="form-label">Hotel Company:</label>
                                <select class="form-select" id="hotel_company" name="hotel_company">
                                    <option value="0" {{ $account->hotel_company == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $account->hotel_company == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="airline_company" class="form-label">Airline Company:</label>
                                <select class="form-select" id="airline_company" name="airline_company">
                                    <option value="0" {{ $account->airline_company == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $account->airline_company == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="transport_company" class="form-label">Transport Company:</label>
                                <select class="form-select" id="transport_company" name="transport_company">
                                    <option value="0" {{ $account->transport_company == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $account->transport_company == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="ship_company" class="form-label">Ship Company:</label>
                                <select class="form-select" id="ship_company" name="ship_company">
                                    <option value="0" {{ $account->ship_company == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $account->ship_company == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="insurance_company" class="form-label">Insurance Company:</label>
                                <select class="form-select" id="insurance_company" name="insurance_company">
                                    <option value="0" {{ $account->insurance_company == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $account->insurance_company == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="customer" class="form-label">Customer:</label>
                                <select class="form-select" id="customer" name="customer">
                                    <option value="0" {{ $account->customer == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $account->customer == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="employee" class="form-label">Employee:</label>
                                <select class="form-select" id="employee" name="employee">
                                    <option value="0" {{ $account->employee == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $account->employee == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="woner" class="form-label">Woner:</label>
                                <select class="form-select" id="woner" name="woner">
                                    <option value="0" {{ $account->woner == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $account->woner == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="box" class="form-label">Box:</label>
                                <select class="form-select" id="box" name="box">
                                    <option value="0" {{ $account->box == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $account->box == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="persantage" class="form-label">Persantage:</label>
                                <input type="number" class="form-control" id="persantage" name="persantage" value="{{ $account->persantage }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleOptions() {
            var trading = document.getElementById("trading").value;
            if (trading == 1) {
                document.getElementById("visa_company").disabled = true;
                document.getElementById("hotel_company").disabled = true;
                document.getElementById("airline_company").disabled = true;
                document.getElementById("transport_company").disabled = true;
                document.getElementById("ship_company").disabled = true;
                document.getElementById("insurance_company").disabled = true;
                document.getElementById("customer").disabled = true;
                document.getElementById("employee").disabled = true;
                document.getElementById("woner").disabled = true;
                document.getElementById("box").disabled = true;

                document.getElementById("visa_company").value = 0;
                document.getElementById("hotel_company").value = 0;
                document.getElementById("airline_company").value = 0;
                document.getElementById("transport_company").value = 0;
                document.getElementById("ship_company").value = 0;
                document.getElementById("insurance_company").value = 0;
                document.getElementById("customer").value = 0;
                document.getElementById("employee").value = 0;
                document.getElementById("box").value = 0;
                document.getElementById("woner").value = 0;
            } else {
                document.getElementById("visa_company").disabled = false;
                document.getElementById("hotel_company").disabled = false;
                document.getElementById("airline_company").disabled = false;
                document.getElementById("transport_company").disabled = false;
                document.getElementById("ship_company").disabled = false;
                document.getElementById("insurance_company").disabled = false;
                document.getElementById("customer").disabled = false;
                document.getElementById("employee").disabled = false;
                document.getElementById("woner").disabled = false;
                document.getElementById("box").disabled = false;
            }
        }

        // Call the function on page load to set the initial state
        toggleOptions();

        document.getElementById("account-form").addEventListener("submit", function(event) {
            var trading = document.getElementById("trading").value;
            if (trading == 1) {
                document.getElementById("visa_company").disabled = false;
                document.getElementById("hotel_company").disabled = false;
                document.getElementById("airline_company").disabled = false;
                document.getElementById("transport_company").disabled = false;
                document.getElementById("ship_company").disabled = false;
                document.getElementById("insurance_company").disabled = false;
                document.getElementById("customer").disabled = false;
                document.getElementById("employee").disabled = false;
                document.getElementById("woner").disabled = false;
                document.getElementById("box").disabled = false;
                var persantage = document.getElementById("persantage").value;
                if (persantage == "") {
                    alert("Please enter a persantage value");
                    event.preventDefault();
                } else {
                    var value = parseInt(persantage);
                    if (value < 0 || value > 100) {
                        alert("Please enter a value between 0 and 100");
                        event.preventDefault();
                    }
                }
            }
        });

        document.getElementById("persantage").addEventListener("input", function() {
            var value = parseInt(this.value);
            if (value < 0 || value > 100) {
                this.value = "";
                alert("Please enter a value between 0 and 100");
            }
        });
    </script>
</body>
</html>
