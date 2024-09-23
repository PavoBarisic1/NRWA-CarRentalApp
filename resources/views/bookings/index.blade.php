@extends('bookings.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100 flex-column">
    <div class="text-center mb-3">
    <a href="{{ route('admin') }}" class="btn btn-secondary">Admin Dashboard</a>
    </div>
    <div class="card w-75">
        <div class="card-body">
            <h2 class="text-center">Popis rezervacija</h2>
            <a href="{{ route('bookings.create') }}" class="btn btn-primary mb-3">Dodaj rezervaciju</a>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Auto</th>
                        <th>Korisnik</th>
                        <th>Mjesto rezervacije</th>
                        <th>Odrediste</th>
                        <th>Datum rezervacije</th>
                        <th>Status</th>
                        <th>Akcije</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->BOOK_ID }}</td>
                        <td>{{ $booking->car->CAR_NAME }}</td>
                        <td>{{ $booking->user->FNAME }} {{ $booking->user->LNAME }}</td>
                        <td>{{ $booking->BOOK_PLACE }}</td>
                        <td>{{ $booking->DESTINATION }}</td>
                        <td>{{ $booking->BOOK_DATE }}</td>
                        <td>{{ $booking->BOOK_STATUS }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('bookings.edit', $booking->BOOK_ID) }}" class="btn btn-primary">Uredi</a>
                                <form action="{{ route('bookings.destroy', $booking->BOOK_ID) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Jeste li sigurni?')">Obriši</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
