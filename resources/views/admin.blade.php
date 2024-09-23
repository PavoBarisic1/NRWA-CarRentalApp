<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f8f9fa;
            padding-top: 60px;
        }
        .content {
            margin-left: 20%;
            margin-right: 30%;
            padding: 270px;
            padding-right: 50px;
            background-image: url('psii.jpg');
            
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Admin Dashboard</a>
</nav>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-3 sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                <a class="nav-link active" href="/admin" style="font-size: 2em;"><strong>Dashboard</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cars.index') }}">Auti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">Korisnici</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bookings.index') }}">Rezervacije</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('payments.index') }}">Placanja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('feedbacks.index') }}">Komentari</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/api/carss') }}">API auti, XML</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/api/userss') }}">API korisnici, JQUERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/api/documentation') }}">API Dokumentacija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">Odjava</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 content">
            <!-- Ovdje ide sadržaj -->
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>