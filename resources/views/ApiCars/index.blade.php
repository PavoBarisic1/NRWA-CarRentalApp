<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popis Automobila</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <div class="text-center mb-3">
            <a href="{{ route('admin') }}" class="btn btn-secondary">Admin Dashboard</a>
        </div>
        <div class="card w-75">
            <div class="card-body">
                <h2 class="text-center">Popis automobila</h2>
                <a href="{{ route('apicars.create') }}" class="btn btn-primary mb-3">Dodaj auto</a>

                <table class="table table-bordered" id="carsTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Naziv</th>
                            <th>Tip goriva</th>
                            <th>Kapacitet</th>
                            <th>Cijena</th>
                            <th>Dostupnost</th>
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
        // Fetch all cars
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'http://localhost:8000/api/cars', true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                var cars = JSON.parse(xhr.responseText);
                var tableBody = document.getElementById('carsTable').getElementsByTagName('tbody')[0];

                cars.forEach(function(car) {
                    var row = tableBody.insertRow();
                    row.innerHTML = `
                        <td>${car.CAR_ID}</td>
                        <td>${car.CAR_NAME}</td>
                        <td>${car.FUEL_TYPE}</td>
                        <td>${car.CAPACITY}</td>
                        <td>${car.PRICE}</td>
                        <td>${car.AVAILABLE ? 'Da' : 'Ne'}</td>
                        <td>
                            <a href="http://localhost:8000/api/carss/edit/${car.CAR_ID}" class="btn btn-primary">Uredi</a>
                            <button class="btn btn-danger" onclick="deleteCar(${car.CAR_ID})">Obriši</button>
                        </td>
                    `;
                });
            }
        };
        xhr.send();

        // Delete car function
        function deleteCar(id) {
            if (confirm('Jeste li sigurni?')) {
                var xhrDelete = new XMLHttpRequest();
                xhrDelete.open('DELETE', 'http://localhost:8000/api/cars/' + id, true);
                xhrDelete.onload = function () {
                    if (xhrDelete.status === 204) {
                        alert('Auto uspješno obrisan!');
                        location.reload();
                    }
                };
                xhrDelete.send();
            }
        }
    </script>
</body>
</html>
