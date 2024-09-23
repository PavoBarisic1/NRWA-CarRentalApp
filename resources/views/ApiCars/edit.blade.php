@extends('cars.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card w-50">
        <div class="card-body">
            <h2 class="text-center">Uredi auto</h2>
            <form action="{{ route('cars.update', $car->CAR_ID) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="CAR_NAME">Naziv automobila:</label>
                    <input type="text" name="CAR_NAME" value="{{ $car->CAR_NAME }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="FUEL_TYPE">Tip goriva:</label>
                    <input type="text" name="FUEL_TYPE" value="{{ $car->FUEL_TYPE }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="CAPACITY">Kapacitet:</label>
                    <input type="number" name="CAPACITY" value="{{ $car->CAPACITY }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="PRICE">Cijena:</label>
                    <input type="number" name="PRICE" value="{{ $car->PRICE }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="CAR_IMG">URL slike:</label>
                    <input type="text" name="CAR_IMG" value="{{ $car->CAR_IMG }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="AVAILABLE">Dostupnost:</label>
                    <select name="AVAILABLE" class="form-control" required>
                        <option value="1" {{ $car->AVAILABLE ? 'selected' : '' }}>Da</option>
                        <option value="0" {{ !$car->AVAILABLE ? 'selected' : '' }}>Ne</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ažuriraj</button>
            </form>
        </div>
    </div>
</div>
@endsection
