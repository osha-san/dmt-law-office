<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Case Library</title>
    <link rel="stylesheet" href="{{ asset('css/admin-case-library.css') }}">
</head>
<body>
    <div class="header">
        <h1>Admin Case Library</h1>
    </div>
    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <h3>DMT Law</h3>
        </div>
        <nav class="navbar">
            <ul>
                <li >
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
                <li class="active">
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
        <div class="case-library">
            <div class="combined-container">
                <div class="search-container">
                    <div class="search-bar">
                        <input type="text" placeholder="Search cases..." oninput="searchCases()">
                        <span class="search-icon">&#128269;</span>
                    </div>
                    <button id="search-btn">Search</button>
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </div>
                <div class="case-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Case Number</th>
                            </tr>
                        </thead>
                        <tbody id="caseTableBody">
                            <!-- Cases will be dynamically added here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/admin-case-library.js') }}"></script>
</body>
</html>
