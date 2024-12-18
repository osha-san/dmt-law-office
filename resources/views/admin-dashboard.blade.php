<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('images/dmt-logo.png') }}" type="icon">
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <script src="{{ asset('js/admin-dashboard.js') }}" defer></script>
    <title>Admin Dashboard - DMT Law Office</title>
</head>
<body>
    <header class="header">
        <h3>DMT Law Office</h3>
        <p>Good day, Admin</p>
    </header>

    <section class="sidebar">
        <div class="logo">
            <img src="{{ asset('images/dmt-logo.png') }}" alt="DMT Law Logo">
            <h3>DMT Law</h3>
        </div>
        <nav class="navbar">
            <ul>
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('images/dashboard.png') }}" alt="Dashboard"> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.appointments') }}">
                        <img src="{{ asset('images/appointment.png') }}" alt="Appointments"> Appointments
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.calendar') }}">
                        <img src="{{ asset('images/calendar.png') }}" alt="Calendar"> Calendar
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.billings') }}">
                        <img src="{{ asset('images/pay.png') }}" alt="My Bills"> My Bills
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.case-library') }}">
                        <img src="{{ asset('images/case-library.png') }}" alt="Case Library"> Case Library
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.clients') }}">
                        <img src="{{ asset('images/clients.png') }}" alt="Clients"> Clients
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.logbook') }}">
                        <img src="{{ asset('images/logbook.png') }}" alt="Logbook"> Logbook
                    </a>
                </li>
                <li class="logout">
                    <a href="{{ route('admin.logout') }}">
                        <img src="{{ asset('images/logout.png') }}" alt="Log Out"> Log Out
                    </a>
                </li>
            </ul>
        </nav>
    </section>

    <main class="main">
        <div class="dashboard">
            <div class="container-header">
                <div class="admin">
                    <p>Welcome, <b>Admin!</b></p>
                </div>
                <div class="admin">
                    <p>Today is <b id="currentDate"></b></p>
                </div>
            </div>
            <div class="dashboard_content">
                <div class="calendar-header">
                    <b><p id="monthYear"></p></b>
                    <div class="calendar_btn">
                        <button onclick="prevMonth()"><i class="fa-solid fa-chevron-left"></i></button>
                        <button onclick="nextMonth()"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
                <table class="calendar">
                    <thead>
                        <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                    </thead>
                    <tbody id="calendarBody" class="calendarBody"></tbody>
                </table>
            </div>
            <div class="dashboard_content">
                <div class="content">
                    <div class="content_header">
                        <img src="{{ asset('images/appointment.png') }}" alt="Appointments">
                        <h4>Notifications</h4>
                    </div>
                    <div class="content_details">
                        @forelse ($appointments as $appointment)
                            <b><p>{{ $appointment->type }}</p></b><br>
                            <p>{{ $appointment->client_name }}</p>
                            <p>{{ $appointment->time }} @ {{ $appointment->location }}</p>
                        @empty
                            <p>No notifications available.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
