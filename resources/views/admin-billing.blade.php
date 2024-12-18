<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin-billings.css') }}">
    <script src="{{ asset('js/admin-billings.js') }}" defer></script>
    <title>Admin Billings</title>
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
            <img src="{{ asset('images/logo.png') }}" alt="DMT Law Logo">
            <h3>DMT Law</h3>
        </div>
        <nav class="navbar">
            <ul>
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('images/dashboard.png') }}" alt="Dashboard">Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.appointments') }}">
                        <img src="{{ asset('images/appointment.png') }}" alt="Appointments">Appointments
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.calendar') }}">
                        <img src="{{ asset('images/calendar.png') }}" alt="Calendar">Calendar
                    </a>
                </li>
                <li class="active">
                    <a href="{{ route('admin.bills') }}">
                        <img src="{{ asset('images/pay.png') }}" alt="Bills">My Bills
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.caselibrary') }}">
                        <img src="{{ asset('images/case_library.png') }}" alt="Case Library">Case Library
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.clients') }}">
                        <img src="{{ asset('images/clients.png') }}" alt="Clients">Clients
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.logbook') }}">
                        <img src="{{ asset('images/logbook.png') }}" alt="Logbook">Logbook
                    </a>
                </li>
                <li class="logout">
                    <a href="{{ route('admin.logout') }}">
                        <img src="{{ asset('images/logout.png') }}" alt="Logout">Log Out
                    </a>
                </li>
            </ul>
        </nav>
    </section>

    <!-- Main Content -->
    <main class="main">
        <div class="billings">
            <div class="content-wrapper">
                <div class="content">
                    <div class="table-container">
                        <p>
                            Invoices
                            <button id="newInvoice">+ NEW INVOICE</button>
                        </p>
                        <table id="invoiceTable">
                            <thead>
                                <tr>
                                    <th>Invoice No.</th>
                                    <th>Billed to</th>
                                    <th>Service</th>
                                    <th>Due on</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data will be dynamically populated here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modals -->
    <!-- Add modal partial for better code separation -->

</body>
</html>
