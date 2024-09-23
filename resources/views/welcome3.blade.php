<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naslovna Stranica</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
          background: linear-gradient(to bottom right, #235d78, #FFFFFF); /* Blue to white gradient */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: gray; /* Promijenite boju ovdje */
        }

        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f0f3ed;">

  <div class="container">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Početna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">O nama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Usluge</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontakt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin') }}">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="jumbotron" style="background-color: #f0f3ed;">
    <h1 class="display-4">Car-rentall app</h1>
    <p class="lead">Ovdje možete pronaći informacije o našoj organizaciji i usluge koje nudimo.</p>
    <hr class="my-4">
    <p>Kliknite na gumb ispod kako biste saznali više.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Saznajte više</a>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>