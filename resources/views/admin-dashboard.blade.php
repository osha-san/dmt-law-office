<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DMT LAW OFFICE</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
        <!-- JS -->
        <script src="{{ asset('js/admin-dashboard.js') }}" defer></script>
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('images/dmt_logo.png') }}" type="icon">
    </head>

    <body>
        <!-- Header -->
        <header class="header">
            <h3>DMT Law Office</h3>
            <p>Good day, Admin</p>
        </header>

        <!-- Sidebar -->
        <section class="sidebar">
            <div class="logo">
                <img src="{{ asset('images/dmt_logo.png') }}" alt="DMT Law Logo">
                <h3>DMT Law</h3>
            </div>
            <nav class="navbar">
                <ul>
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <img src="{{ asset('images/dashboard.png') }}" alt="dashboard">Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.appointments') }}">
                            <img src="{{ asset('images/appointment.png') }}" alt="appointments">Appointments
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.calendar') }}">
                            <img src="{{ asset('images/calendar.png') }}" alt="calendar">Calendar
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.bills') }}">
                            <img src="{{ asset('images/pay.png') }}" alt="pay">My Bills
                        </a>
                    </li>
                    <li  class="active">
                        <a href="{{ route('admin.caselibrary') }}">
                            <img src="{{ asset('images/case_library.png') }}" alt="case library">Case Library
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.clients') }}">
                            <img src="{{ asset('images/my_client.png') }}" alt="clients">Clients
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.logbook') }}">
                            <img src="{{ asset('images/logbook.png') }}" alt="logbook">Logbook
                        </a>
                    </li>
                    <li class="logout">
                        <a href="{{ route('admin.logout') }}">
                            <img src="{{ asset('images/logout.png') }}" alt="logout">Log Out
                        </a>
                    </li>
                </ul>
            </nav>
        </section>

        <!-- Main Content -->
        <main class="main">
            <div class="dashboard">
                <!-- Header Content -->
                <div class="container-header">
                    <div class="admin">
                        <p>Welcome, <b>Admin!</b></p>
                    </div>
                    <div class="admin">
                        <p>Today is <b id="currentDate"></b></p>
                    </div>
                </div>

                <!-- Calendar Section -->
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

                <!-- Notifications Section -->
                <div class="dashboard_content">
                    <div class="content">
                        <div class="content_header">
                            <img src="{{ asset('images/appointment.png') }}">
                            <h4>Notifications</h4>
                        </div>
                        <div class="content_details">
                            <b><p>Consultation</p></b><br>
                            <p>Jeaudee Dreigh</p>
                            <p>8:00 AM @ DMT Law office</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
