<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Calendar</title>
    <link rel="stylesheet" href="{{ asset('css/admin-calendar.css') }}">
</head>
<body>
    <div class="header">
        <h1>Admin Calendar</h1>
    </div>
    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
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
                <li  class="active">
                    <a href="{{ route('admin.calendar') }}">
                        <img src="{{ asset('images/calendar.png') }}" alt="calendar">Calendar
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.bills') }}">
                        <img src="{{ asset('images/pay.png') }}" alt="pay">My Bills
                    </a>
                </li>
                <li>
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
    </div>
    <div class="main">
        <div class="adminCalendar">
            <div class="dashboard_content">
                <div class="calendar-header">
                    <div class="calendar_btn">
                        <button onclick="prevMonth()">Previous</button>
                        <button onclick="nextMonth()">Next</button>
                    </div>
                    <div id="monthYear"></div>
                </div>
                <div class="calendar">
                    <table>
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
                        <tbody id="calendarBody">
                            <!-- Calendar content will be dynamically added here by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/admin-calendar.js') }}"></script>
</body>
</html>
