@extends('cars.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100 flex-column">
    <div class="text-center mb-3">
        <a href="{{ route('admin') }}" class="btn btn-secondary">Admin Dashboard</a>
    </div>
    <div class="card w-75">
        <div class="card-body">
            <h2 class="text-center">Popis automobila</h2>
            <a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">Dodaj auto</a>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table table-bordered">
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
                    @foreach($cars as $car)
                    <tr>
                        <td>{{ $car->CAR_ID }}</td>
                        <td>{{ $car->CAR_NAME }}</td>
                        <td>{{ $car->FUEL_TYPE }}</td>
                        <td>{{ $car->CAPACITY }}</td>
                        <td>{{ $car->PRICE }}</td>
                        <td>{{ $car->AVAILABLE ? 'Da' : 'Ne' }}</td>
                        <td>
                            <a href="{{ route('cars.edit', $car->CAR_ID) }}" class="btn btn-primary">Uredi</a>
                            <form action="{{ route('cars.destroy', $car->CAR_ID) }}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Jeste li sigurni?')">Obriši</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
