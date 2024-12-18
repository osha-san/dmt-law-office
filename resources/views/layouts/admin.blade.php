<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>

    <!-- Default Admin CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">

    <!-- Page-specific CSS -->
    @stack('styles')
</head>
<body>
    <header class="admin-header">
        <h1>DMT Law - Admin</h1>
        <nav>
            <ul>
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.appointments') }}">Appointments</a></li>
                <li><a href="{{ route('admin.clients') }}">Clients</a></li>
                <li><a href="{{ route('admin.logbook') }}">Logbook</a></li>
                <li><a href="{{ route('admin.bills') }}">Bills</a></li>
                <li><a href="{{ route('admin.logout') }}">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Page-specific Scripts -->
    @stack('scripts')
</body>
</html>
