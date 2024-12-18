<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Clients</title>
    <link rel="stylesheet" href="{{ asset('css/admin-clients.css') }}">
</head>
<body>
    <div class="header">
        <h1>Admin - Clients</h1>
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
                <li>
                    <a href="{{ route('admin.caselibrary') }}">
                        <img src="{{ asset('images/case_library.png') }}" alt="case library">Case Library
                    </a>
                </li>
                <li class="active">
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
        <div class="clients">
            <div class="combined-container">
                <div class="search-container">
                    <div class="search-bar">
                        <input type="text" id="search" placeholder="Search Clients">
                        <span class="search-icon">🔍</span>
                    </div>
                    <button onclick="addClient()">Add Client</button>
                </div>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Client Name</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="clientTable">
                            <!-- Dynamic content will be inserted here by JavaScript -->
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{ $client->firstname }} {{ $client->lastname }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->number }}</td>
                                    <td>
                                        <button onclick="editClient({{ $client->id }})">Edit</button>
                                        <button onclick="deleteClient({{ $client->id }})">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/admin-clients.js') }}"></script>
</body>
</html>
