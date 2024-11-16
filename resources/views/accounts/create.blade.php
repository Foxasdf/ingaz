<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
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
                        <h4 class="mb-0">Create New Account</h4>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('accounts.store') }}" id="account-form">
                            @csrf

                            <div class="mb-3">
                                <label for="account_name" class="form-label">Account Name:</label>
                                <input type="text" class="form-control" id="account_name" name="account_name" value="{{ old('account_name') }}" required>
                                @error('account_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="trading" class="form-label">Trading:</label>
                                <select class="form-select" id="trading" name="trading" onchange="toggleOptions()">
                                    <option value="0" {{ old('trading') == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ old('trading') == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="visa_company" class="form-label">Visa Company:</label>
                                <select class="form-select" id="visa_company" name="visa_company">
                                    <option value="0" {{ old('visa_company') == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ old('visa_company') == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>
                            <!--  ... other company selects (hotel, airline, etc.) -->
                             <div class="mb-3">
                                <label for="hotel_company" class="form-label">Hotel Company:</label>
                                <select class="form-select" id="hotel_company" name="hotel_company">
                                    <option value="0" {{ old('hotel_company') == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ old('hotel_company') == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="airline_company" class="form-label">Airline Company:</label>
                                <select class="form-select" id="airline_company" name="airline_company">
                                    <option value="0" {{ old('airline_company') == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ old('airline_company') == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="transport_company" class="form-label">Transport Company:</label>
                                <select class="form-select" id="transport_company" name="transport_company">
                                    <option value="0" {{ old('transport_company') == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ old('transport_company') == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="ship_company" class="form-label">Ship Company:</label>
                                <select class="form-select" id="ship_company" name="ship_company">
                                    <option value="0" {{ old('ship_company') == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ old('ship_company') == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="insurance_company" class="form-label">Insurance Company:</label>
                                <select class="form-select" id="insurance_company" name="insurance_company">
                                    <option value="0" {{ old('insurance_company') == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1"  {{ old('insurance_company') == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="customer" class="form-label">Customer:</label>
                                <select class="form-select" id="customer" name="customer">
                                    <option value="0" {{ old('customer') == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ old('customer') == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="employee" class="form-label">Employee:</label>
                                <select class="form-select" id="employee" name="employee">
                                    <option value="0" {{ old('employee') == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ old('employee') == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>
                            <!-- ... (woner, box) -->
                            <div class="mb-3">
                                <label for="woner" class="form-label">Woner:</label>
                                <select class="form-select" id="woner" name="woner">
                                    <option value="0" {{ old('woner') == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ old('woner') == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="box" class="form-label">Box:</label>
                                <select class="form-select" id="box" name="box">
                                    <option value="0" {{ old('box') == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ old('box') == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="persantage" class="form-label">Percentage:</label>
                                <input type="number" class="form-control" id="persantage" name="persantage" value="{{ old('persantage') }}" required>
                                @error('persantage')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Create Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
      // ... (JavaScript code - see below)
        function toggleOptions() {
                // ... (same logic as in your edit.blade.php file)
            var trading = document.getElementById("trading").value;
            // ...disable other fields if trading is 1, enable them if it's 0
            var fieldsToToggle = ["visa_company", "hotel_company", "airline_company", "transport_company", "ship_company", "insurance_company", "customer", "employee", "woner", "box"];

            fieldsToToggle.forEach(function(fieldId) {
                var element = document.getElementById(fieldId);
                element.disabled = trading == 1;
                if (trading == 1) {
                    element.value = 0; // Reset to "No" if trading is yes
                }
            });
        }

        toggleOptions(); // Call on page load

        document.getElementById("account-form").addEventListener("submit", function(event) {
            var trading = document.getElementById("trading").value;
            var persantage = document.getElementById("persantage").value;

            if (persantage === "" && trading == 1) {
                alert("Please enter a percentage value");
                event.preventDefault();
              return;  // Stop further execution
            }


            if (persantage !== "") { //Only check if persantage is not empty
                var value = parseInt(persantage);

                if (value < 0 || value > 100) {
                    alert("Please enter a value between 0 and 100");
                    event.preventDefault();
                    return; // Stop further execution
                }
            }

           if(trading == 1){ //Enable fields before form submission if Trading is "Yes"
            var fieldsToToggle = ["visa_company", "hotel_company", "airline_company", "transport_company", "ship_company", "insurance_company", "customer", "employee", "woner", "box"];
             fieldsToToggle.forEach(function(fieldId) {
                 document.getElementById(fieldId).disabled = false;
             });
           }

        });


        document.getElementById("persantage").addEventListener("input", function() {
            var value = parseInt(this.value);
            if (isNaN(value) || value < 0 || value > 100) { //Check for NaN
                this.value = ""; // Clear the input field
                alert("Please enter a value between 0 and 100");
            }
        });

    </script>

</body>
</html>
