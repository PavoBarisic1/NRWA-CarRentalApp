<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popis Korisnika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <a href="{{ route('admin') }}" class="btn btn-secondary mb-3">Admin Dashboard</a>
        <div class="card w-75">
            <div class="card-body">
                <h2 class="text-center">Popis Korisnika</h2>
                <a href="{{ route('apiusers.create') }}" class="btn btn-primary mb-3">Dodaj Korisnika</a>

                <table class="table table-bordered text-center" id="usersTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Email</th>
                            <th>Broj Telefona</th>
                            <th>Spol</th>
                            <th>Akcije</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // Učitaj sve korisnike
        $(document).ready(function() {
            $.ajax({
                url: 'http://localhost:8000/api/users', // Zamijenite s vašim API URL-om
                method: 'GET',
                success: function(users) {
                    users.forEach(function(user) {
                        $('#usersTable tbody').append(`
                            <tr>
                                <td>${user.USER_ID}</td>
                                <td>${user.FNAME}</td>
                                <td>${user.LNAME}</td>
                                <td>${user.EMAIL}</td>
                                <td>${user.PHONE_NUMBER}</td>
                                <td>${user.GENDER}</td>
                                <td>
                                    <a href="http://localhost:8000/api/userss/edit/${user.USER_ID}" class="btn btn-primary">Uredi</a>
                                    <button class="btn btn-danger" onclick="deleteUser(${user.USER_ID})">Obriši</button>
                                </td>
                            </tr>
                        `);
                    });
                }
            });
        });

        // Funkcija za brisanje korisnika
        function deleteUser(id) {
            if (confirm('Jeste li sigurni da želite obrisati ovog korisnika?')) {
                $.ajax({
                    url: 'http://localhost:8000/api/users/' + id, // Zamijenite s vašim API URL-om
                    method: 'DELETE',
                    success: function() {
                        alert('Korisnik uspješno obrisan!');
                        location.reload();
                    },
                    error: function() {
                        alert('Greška prilikom brisanja korisnika.');
                    }
                });
            }
        }
    </script>
</body>
</html>
