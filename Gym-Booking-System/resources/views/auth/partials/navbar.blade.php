<header class="p-3 bg-blue text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-between">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        <!-- Logo -->
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <!-- Menu Links -->
        <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="{{ route('bookings.index') }}" class="nav-link px-2 text-white">Classes</a></li>
        <li><a href="{{ route('slots.index') }}" class="nav-link px-2 text-white">Book Classes</a></li>
      </ul>

      @auth
        <!-- User Information & Logout Button -->
        <div class="text-end">
          {{ auth()->user()->name }}
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light ms-2">Logout</a>
        </div>
      @endauth

      @guest
        <!-- Login & Sign-up Buttons -->
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>
