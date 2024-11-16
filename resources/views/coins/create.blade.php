@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Create New Coin</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('coins.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="coin_name" class="form-label">Coin Name</label>
                            <input type="text" class="form-control" id="coin_name" name="coin_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="coin_price" class="form-label">Coin Price</label>
                            <input type="number" step="0.01" class="form-control" id="coin_price" name="coin_price" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Coin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
