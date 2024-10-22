@extends('frontend.layout.app')

@section('title')
    {{ $product->name }}
@endsection

@section('content')

<style>
    .product-image {
        max-height: 500px; /* Limit max height of image */
        width: 100%; /* Make image full width */
        object-fit: cover; /* Maintain aspect ratio and cover the area */
        border-radius: 8px; /* Rounded corners for image */
    }
    .product-details {
        border: 1px solid #ddd; /* Border for the details card */
        padding: 20px; /* Padding inside the card */
        border-radius: 8px; /* Rounded corners for the card */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow for 3D effect */
        transition: transform 0.3s, box-shadow 0.3s; /* Transition effects */
    }
    .product-details:hover {
        transform: translateY(-5px); /* Lift effect on hover */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Increased shadow on hover */
    }
</style>

<div class="container my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ $product->GetImagePath() }}" alt="{{ $product->name }}" class="img-fluid product-image">
        </div>
        
        <!-- Product Details -->
        <div class="col-md-6">
            <div class="product-details">
                <h1 class="mb-3">{{ $product->name }}</h1>
                <p class="lead">{{ $product->description }}</p>
                <h4 class="text-success mb-3">${{ number_format($product->price, 2) }}</h4>

                <!-- Add to Cart Form -->
                <form action="{{ route('cart.add_to_cart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="d-flex align-items-center mb-3">
                        <input type="number" name="qty" class="form-control w-25" value="1" min="1">
                        <button type="submit" class="btn btn-primary ms-3">Add to Cart</button>
                    </div>
                </form>

                <p><strong>Category:</strong> {{ $product->category->name }}</p>
                <p><strong>Brand:</strong> {{ $product->brand->name }}</p>
            </div>
        </div>
    </div>
</div>

@endsection
