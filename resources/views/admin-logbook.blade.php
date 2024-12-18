<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Logbook</title>
    <link rel="stylesheet" href="{{ asset('css/admin-logbook.css') }}">
</head>
<body>
    <div class="header">
        <h1>Admin Logbook</h1>
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
                <li  class="active">
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
        <div class="document-container">
            <div class="header">
                <button id="ongoingTab" class="btnActive" onclick="ongoingIngoingTab('outgoing')">Outgoing</button>
                <button id="ingoingTab" onclick="ongoingIngoingTab('incoming')">Incoming</button>
            </div>

            <div class="tab-content">
                <!-- Outgoing Documents -->
                <div id="outgoing" style="display: block;">
                    <h3>Outgoing Documents</h3>
                    <table id="outgoingTable">
                        <thead>
                            <tr>
                                <th>Document Name</th>
                                <th id="dateHeader">Date Issued<br>MM/DD/YYYY</th>
                            </tr>
                        </thead>
                        <tbody id="outgoingList">
                            @foreach ($outgoingDocuments as $doc)
                                <tr>
                                    <td><a href="{{ $doc->url }}" target="_blank">{{ $doc->name }}</a></td>
                                    <td>{{ $doc->date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Incoming Documents -->
                <div id="incoming" style="display: none;">
                    <h3>Incoming Documents</h3>
                    <table id="incomingTable">
                        <thead>
                            <tr>
                                <th>Document Name</th>
                                <th id="dateHeader">Date Received<br>MM/DD/YYYY</th>
                            </tr>
                        </thead>
                        <tbody id="incomingList">
                            @foreach ($incomingDocuments as $doc)
                                <tr>
                                    <td><a href="{{ $doc->url }}" target="_blank">{{ $doc->name }}</a></td>
                                    <td>{{ $doc->date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <button onclick="openModal()">Add Document</button>

            <!-- Modal for Adding Documents -->
            <div id="addModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <form id="addDocumentForm" action="{{ route('admin.logbook.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="documentUpload">Upload Document:</label>
                            <input type="file" id="documentUpload" name="document" required>
                        </div>
                        <div class="form-group">
                            <label for="documentDate">Date:</label>
                            <input type="date" id="documentDate" name="date" required>
                        </div>
                        <button type="submit">Add Document</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/admin-logbook.js') }}"></script>
</body>
</html>
