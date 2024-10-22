@extends('frontend/layout/app')

@section('title')
Home Page
@endsection

@section('content')
<style>
    .card {
        border: none; /* Remove card border if not needed */
        overflow: hidden; /* Prevent overflow for images */
        transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition for transform and shadow */
        border-radius: 10px; /* Add rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Initial shadow for 3D effect */
        display: flex; /* Ensure the card uses flexbox for layout */
        flex-direction: column; /* Stack children vertically */
    }

    .card img {
        width: 100%; /* Make image take full width of the card */
        height: 200px; /* Set a fixed height for uniformity */
        object-fit: cover; /* Ensure the image covers the area without distortion */
        flex-shrink: 0; /* Prevent the image from shrinking */
    }

    .card-body {
        text-align: center; /* Center align the text in the card body */
        flex-grow: 1; /* Allow the card body to take the remaining space */
    }

    .card:hover {
        transform: translateY(-5px) scale(1.03); /* Move the card up and scale slightly on hover */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Increase shadow on hover */
    }

    .row {
        display: flex; /* Use flexbox for the row */
        flex-wrap: wrap; /* Allow items to wrap to the next line */
        justify-content: space-between; /* Distribute space evenly */
    }

    .col-md-4 {
        padding: 10px; /* Add some padding around each card */
    }
</style>

<div class="container mt-4">
    <!-- Search and Filter Form -->
    <form method="GET" action="{{ route('home.index') }}" class="mb-4">
        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control" placeholder="Search products..." value="{{ request()->input('search') }}">
            </div>
            <div class="col-md-4">
                <select name="category" class="form-select">
                    <option value="All" {{ request()->input('category') == 'All' ? 'selected' : '' }}>All Categories</option>
                    @foreach($categories as $row)
                        <option value="{{ $row->id }}" {{ request()->input('category') == $row->id ? 'selected' : '' }}>
                            {{ $row->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    
    <div class="row">
        @foreach ($product as $item)
            <div class="col-md-4 mb-4">
                <a href="/products/{{ $item->id }}">
                    <div class="card">
                        <img src="{{ asset($item->image_path) }}" alt="{{ $item->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <p class="card-text"><strong>${{ $item->price }}</strong></p>
                            <a href="/cart" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection
