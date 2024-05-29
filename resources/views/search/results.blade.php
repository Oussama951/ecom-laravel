@extends('layouts.master')
@section('content')
    <div class="container mt-4">
        <h3>Search Results for "{{ $query }}"</h3>
        @if($products->isEmpty())
        <p>No products found.</p>
        @else
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="images/uploads/{{ $product['Thumbnail'] }}" class="card-img-top" alt="{{ $product['Name'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product['Name'] }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Product</a>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
