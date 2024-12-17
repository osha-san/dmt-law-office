<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/client-register.css') }}">
    <link rel="icon" href="{{ asset('images/dmtlogo.png') }}" type="icon">
</head>
<body>
    <nav class="navbar">
        <div class="logo">DMT Law</div>
        <div class="nav-links">
            <a href="{{ url('/') }}#home">Home</a>
            <a href="{{ url('/') }}#about">About Us</a>
            <div class="dropdown">
                <span class="dropdown-btn">Practice Areas <i class="bx bx-chevron-down"></i></span>
                <div class="dropdown-content">
                    <a href="{{ url('/') }}#taxation">Taxation</a>
                    <a href="{{ url('/') }}#corporate">Corporate</a>
                    <a href="{{ url('/') }}#labor">Labor Law</a>
                    <a href="{{ url('/') }}#litigation">Litigation</a>
                    <a href="{{ url('/') }}#family">Family Law</a>
                    <a href="{{ url('/') }}#immigration">Immigration</a>
                </div>
            </div>
            <a href="{{ url('/') }}#contact">Contact Us</a>
        </div>
        <button class="login1-btn">Log in</button>
    </nav>
    <main>
        <div class="log-container">
            <div class="container">
                <div class="left-side">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please</p>
                    <button class="sign-in-btn">Sign In</button>
                </div>
                <div class="right-side">
                    <h1>Create Account</h1>
                    <form action="{{ route('client.register.submit') }}" method="POST" id="registration-form">

                        @csrf
                        <div class="form-row">
                            <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
                            <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
                        </div>
                        <div class="form-row">
                            <input type="text" id="address" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-row">
                            <input type="email" id="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="form-row">
                            <input type="tel" id="contact_number" name="contact_number" placeholder="Contact Number" required>
                        </div>
                        <div class="form-row">
                            <input type="password" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-row">
                            <input type="password" id="confirm_password" name="password_confirmation" placeholder="Confirm Password" required>

                        </div>

                        <div class="terms">
                            <input type="checkbox" id="terms" name="agreement" required>
                            <label for="terms" class="custom-checkbox">by clicking this button, you agree to our Terms, Privacy Policy, and Security Policy</label>
                        </div>

                        <div class="button-container">
                            <button type="submit" class="register-btn">Register</button>
                        </div>
                    </form>

            </div>
        </div>
    </main>
 <script src="{{ asset('js/client-register.js') }}" defer></script>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</body>
</html>
