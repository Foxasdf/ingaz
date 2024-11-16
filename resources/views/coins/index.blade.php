@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Coins List</h4>
                </div>
                <div class="card-body p-4">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <a href="{{ route('coins.create') }}" class="btn btn-primary mb-3">
                        <i class="fas fa-plus"></i> Create New Coin
                    </a>
                    @if($coins->isEmpty())
                        <p class="text-center text-muted">No coins available.</p>
                    @else
                        <table class="table table-hover table-responsive-md">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($coins as $coin)
                                    <tr onclick="window.location='{{ route('coins.show', $coin->coin_id) }}'">
                                        <th scope="row">{{ $coin->coin_id }}</th>
                                        <td>{{ $coin->coin_name }}</td>
                                        <td>${{ number_format($coin->coin_price, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
