<!-- Include Bootstrap and Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Logo / Brand -->
    <a class="navbar-brand" href="#">Small Shop</a>

    <!-- Toggler for Mobile View -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible Section -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <!-- Home Link -->
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>

            <!-- Search Bar -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search for products" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="/login">Login / Register</a>
            </li>
            @endguest

            @if (Auth::check())
            <!-- User Profile Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"></i> {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                  
                    <a class="dropdown-item" href="{{ route('cart.index') }}"><i class="fas fa-shopping-cart"></i> Cart</a>
                    <a class="dropdown-item" href="{{ route('order.index') }}"><i class="fas fa-box"></i> Orders</a>
                    <a class="dropdown-item" href="{{ route('home.profile') }}"><i class="fas fa-user-circle"></i> Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </li>
            @endif
        </ul>

        @if (Auth::check())
        <!-- Cart Icon -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cart.index') }}">
                    <i class="fas fa-shopping-cart"></i> Cart <span class="badge badge-pill badge-danger"></span> <!-- Example for cart count -->
                </a>
            </li>
        </ul>
        @endif
    </div>
</nav>

<!-- Include Bootstrap JS for functionality -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
