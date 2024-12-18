<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DMT LAW OFFICE - Appointments</title>

    <!-- FontAwesome and CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/admin-appointment.css') }}">

    <!-- JavaScript -->
    <script src="{{ asset('js/admin-appointment.js') }}" defer></script>
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
            <img src="{{ asset('images/dmt-logo.png') }}" alt="DMT Law Logo">
            <h3>DMT Law</h3>
        </div>
        < <nav class="navbar">
            <ul>
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('images/dashboard.png') }}" alt="dashboard">Dashboard
                    </a>
                </li>
                <li cla>
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
        <div class="appointment">
            <div class="scheduledAppointments">
                <div class="appointmentsHeader">
                    <h3>SCHEDULED APPOINTMENTS</h3>
                    <div class="rightSection">
                        <!-- Filter Section -->
                        <div class="filterSection">
                            <select class="filterBtn" id="attorneyDropdown" name="Attorney">
                                <option value="" disabled selected>Attorney</option>
                                <option value="All">All</option>
                                <option value="Atty. Angel Abalos">Atty. Angel Abalos</option>
                                <option value="Atty. Jaja Caribo">Atty. Jaja Caribo</option>
                                <option value="Atty. Luiz Calimpon">Atty. Luiz Calimpon</option>
                                <option value="Atty. Joshua Santiago">Atty. Joshua Santiago</option>
                            </select>
                            <select class="filterBtn" id="client" name="Client">
                                <option value="" disabled selected>Client</option>
                                <option value="All">All</option>
                                <option value="Aquino Melvin">Aquino Melvin</option>
                                <option value="Bautista Enrico">Bautista Enrico</option>
                                <option value="Bermeo John James">Bermeo John James</option>
                                <!-- Add other client names dynamically here -->
                            </select>
                        </div>
                    </div>
                    <a href="{{ route('admin.appointments.review') }}" class="reviewBtn">Review Appointments</a>
                </div>

                <!-- Appointment Content -->
                <div class="appointment_content">
                    <section>
                        <h4>Today</h4>
                        <div class="sectionDetails" id="todayAppointments">
                            <b><p>You have no appointments for today</p></b>
                        </div>
                    </section>
                    <section>
                        <h4>Upcoming</h4>
                        <div class="sectionDetails">
                            <b><p>You have no upcoming appointments</p></b>
                        </div>
                    </section>
                    <section>
                        <h4>Previous</h4>
                        <div class="sectionDetails">
                            <b><p>You have no previous appointments</p></b>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
