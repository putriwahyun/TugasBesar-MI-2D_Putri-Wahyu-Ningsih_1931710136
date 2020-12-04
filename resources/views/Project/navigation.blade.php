  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #91cdfa;">
    <div class="container">
      <a class="navbar-brand">Healty Hospital</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item{{ request()->is('home') ? ' active' : '' }}">
          <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item{{ request()->is('aboutUs') ? ' active' : '' }}">
          <a class="nav-link" href="/aboutUs">About Us</a>
        </li>
        <li class="nav-item{{ request()->is('service') ? ' active' : '' }}">
            <a class="nav-link" href="/service">Service</a>
        </li>
        <li class="nav-item{{ request()->is('ourDoctor') ? ' active' : '' }}">
            <a class="nav-link" href="/ourDoctor">Our Doctor</a>
        </li>
    </div>

        @if (Auth::check())
          <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
          <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="#">Welcome {{ Auth::user()->name ?? '' }}</a>
          <a class="btn btn-outline-primary btn-sm" href="{{ route('register') }}">Add Admin</a>
          <a class="btn btn-outline-primary btn-sm" href="{{ route('logout') }}">Logout</a>
        @else
          <a class="btn btn-outline-primary btn-sm" href="{{ route('login') }}">Login</a>
        @endif
    
  </nav>

  