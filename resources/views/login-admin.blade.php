<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/login-admin.css') }}" />
    <link rel="icon" href="{{ asset('img/dmt logo.png') }}" type="icon" />
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">DMT Law</div>
      <div class="nav-links">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/#about') }}">About Us</a>
        <div class="dropdown">
          <span class="dropdown-btn"
            >Practice Areas <i class="bx bx-chevron-down"></i
          ></span>
          <div class="dropdown-content">
            <a href="{{ url('/#taxation') }}">Taxation</a>
            <a href="{{ url('/#corporate') }}">Corporate</a>
            <a href="{{ url('/#labor-law') }}">Labor Law</a>
            <a href="{{ url('/#litigation') }}">Litigation</a>
            <a href="{{ url('/#family-law') }}">Family Law</a>
            <a href="{{ url('/#immigration') }}">Immigration</a>
          </div>
        </div>
        <a href="{{ url('/#contact') }}">Contact Us</a>
      </div>
      <button class="login1-btn">Log in</button>
    </nav>
    <main>
      <div class="login-container">
        <div class="container">
          <div class="log-in-container">
            <h1>Welcome Admin</h1>
            <p>Please log in to your account</p>
            <form action="{{ route('admin.login.submit') }}" method="POST">
              @csrf
              <div class="form-row">
                <input type="email" name="email" id="email" placeholder="email address" required/>
              </div>
              <div class="form-row">
                <input type="password" name="password" id="password" placeholder="Password" required/>
              </div>
              <button type="submit" class="login-btn">Log In</button>
            </form>
            @if ($errors->any())
              <div class="error-messages">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
