<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kreiraj Korisnika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card w-50">
            <div class="card-body">
                <h2 class="text-center">Dodaj novog korisnika</h2>
                <form id="userForm">
                    <div class="mb-3">
                        <label for="FNAME" class="form-label">Ime:</label>
                        <input type="text" id="FNAME" name="FNAME" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="LNAME" class="form-label">Prezime:</label>
                        <input type="text" id="LNAME" name="LNAME" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="LIC_NUM" class="form-label">Broj licence:</label>
                        <input type="number" id="LIC_NUM" name="LIC_NUM" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="EMAIL" class="form-label">Email:</label>
                        <input type="email" id="EMAIL" name="EMAIL" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="PHONE_NUMBER" class="form-label">Telefon:</label>
                        <input type="text" id="PHONE_NUMBER" name="PHONE_NUMBER" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="PASSWORD" class="form-label">Lozinka:</label>
                        <input type="password" id="PASSWORD" name="PASSWORD" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="GENDER" class="form-label">Spol:</label>
                        <select id="GENDER" name="GENDER" class="form-select" required>
                            <option value="M">Muški</option>
                            <option value="F">Ženski</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Dodaj</button>
                </form>
                <div id="successMessage" class="mt-3 text-success" style="display: none;">Korisnik uspješno dodan!</div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#userForm').on('submit', function (e) {
                e.preventDefault();

                var userData = {
                    FNAME: $('#FNAME').val(),
                    LNAME: $('#LNAME').val(),
                    LIC_NUM: $('#LIC_NUM').val(),
                    EMAIL: $('#EMAIL').val(),
                    PHONE_NUMBER: $('#PHONE_NUMBER').val(),
                    PASSWORD: $('#PASSWORD').val(),
                    GENDER: $('#GENDER').val(),
                };

                $.ajax({
                    url: 'http://localhost:8000/api/users', // Zamijenite s vašim API URL-om
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify(userData),
                    success: function (response) {
                        $('#successMessage').show();
                        $('#userForm')[0].reset();

                        // Preusmjeri na index stranicu nakon uspješnog dodavanja
                        window.location.href = 'http://localhost:8000/api/userss'; // Zamijenite s URL-om vaše index stranice
                    },
                    error: function (xhr) {
                        alert('Greška prilikom dodavanja korisnika: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>
</html>
