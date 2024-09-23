<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Novi Auto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card w-50">
            <div class="card-body">
                <h2 class="text-center">Dodaj novi auto</h2>
                <form id="createCarForm">
                    <div class="mb-3">
                        <label for="CAR_NAME" class="form-label">Naziv automobila:</label>
                        <input type="text" id="CAR_NAME" name="CAR_NAME" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="FUEL_TYPE" class="form-label">Tip goriva:</label>
                        <input type="text" id="FUEL_TYPE" name="FUEL_TYPE" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="CAPACITY" class="form-label">Kapacitet:</label>
                        <input type="number" id="CAPACITY" name="CAPACITY" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="PRICE" class="form-label">Cijena:</label>
                        <input type="number" id="PRICE" name="PRICE" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="CAR_IMG" class="form-label">URL slike:</label>
                        <input type="text" id="CAR_IMG" name="CAR_IMG" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="AVAILABLE" class="form-label">Dostupnost:</label>
                        <select id="AVAILABLE" name="AVAILABLE" class="form-control" required>
                            <option value="1">Da</option>
                            <option value="0">Ne</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Dodaj</button>
                </form>
                <div id="successMessage" class="mt-3 text-success" style="display: none;">Auto uspješno dodan!</div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('createCarForm').addEventListener('submit', function (e) {
            e.preventDefault();

            var data = {
                CAR_NAME: document.getElementById('CAR_NAME').value,
                FUEL_TYPE: document.getElementById('FUEL_TYPE').value,
                CAPACITY: document.getElementById('CAPACITY').value,
                PRICE: document.getElementById('PRICE').value,
                CAR_IMG: document.getElementById('CAR_IMG').value,
                AVAILABLE: document.getElementById('AVAILABLE').value
            };

            fetch('http://localhost:8000/api/cars', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
                throw new Error('Greška prilikom dodavanja automobila');
            })
            .then(data => {
                document.getElementById('successMessage').style.display = 'block';
                document.getElementById('createCarForm').reset();

                // Preusmeravanje na index stranicu
                window.location.href = 'http://localhost:8000/api/carss'; // Zameni sa pravim URL-om za index
            })
            .catch(error => {
                console.error(error);
                alert('Dogodila se greška: ' + error.message);
            });
        });
    </script>
</body>
</html>
