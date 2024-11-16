@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Coin Details</h4>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title mb-0">{{ $coin->coin_name }}</h5>
                        <h5 class="text-success mb-0">${{ number_format($coin->coin_price, 2) }}</h5>
                    </div>
                    <div class="mb-3">
                        <p class="text-muted">Coin ID: {{ $coin->coin_id }}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('coins.edit', $coin->coin_id) }}" class="btn btn-outline-secondary">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        @if (!$coin->hasRelations())
                            <form action="{{ route('coins.destroy', $coin->coin_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this coin?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        @endif
                    </div>
                    <a href="{{ route('coins.index') }}" class="btn btn-outline-secondary mt-3">
                        <i class="fas fa-arrow-left"></i> Back to Coins List
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
