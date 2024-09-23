@extends('cars.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card w-50">
        <div class="card-body">
            <h2 class="text-center">Dodaj novi auto</h2>
            <form action="{{ route('cars.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="CAR_NAME">Naziv automobila:</label>
                    <input type="text" name="CAR_NAME" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="FUEL_TYPE">Tip goriva:</label>
                    <input type="text" name="FUEL_TYPE" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="CAPACITY">Kapacitet:</label>
                    <input type="number" name="CAPACITY" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="PRICE">Cijena:</label>
                    <input type="number" name="PRICE" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="CAR_IMG">URL slike:</label>
                    <input type="text" name="CAR_IMG" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="AVAILABLE">Dostupnost:</label>
                    <select name="AVAILABLE" class="form-control" required>
                        <option value="1">Da</option>
                        <option value="0">Ne</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </form>
        </div>
    </div>
</div>
@endsection
