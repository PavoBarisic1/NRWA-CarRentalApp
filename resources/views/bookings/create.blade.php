@extends('bookings.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card w-50">
        <div class="card-body">
            <h2 class="text-center">Dodaj novu rezervaciju</h2>
            <form action="{{ route('bookings.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="CAR_ID">Odaberi auto:</label>
                    <select name="CAR_ID" class="form-control" required>
                        @foreach($cars as $car)
                            <option value="{{ $car->CAR_ID }}">{{ $car->CAR_NAME }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="USER_ID">Odaberi korisnika:</label>
                    <select name="USER_ID" class="form-control" required>
                        @foreach($users as $user)
                            <option value="{{ $user->USER_ID }}">{{ $user->FNAME }} {{ $user->LNAME }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                                <label for="PHONE_NUMBER">Broj telefona</label>
                                <input type="text" name="PHONE_NUMBER" id="PHONE_NUMBER" class="form-control" placeholder="Unesite broj telefona">
                            </div>
                <div class="form-group">
                    <label for="BOOK_PLACE">Mjesto rezervacije:</label>
                    <input type="text" name="BOOK_PLACE" class="form-control" required>
                </div>
                <div class="form-group">
                                <label for="DESTINATION">Odredište</label>
                                <input type="text" name="DESTINATION" id="DESTINATION" class="form-control" placeholder="Unesite odredište">
                            </div>
                <div class="form-group">
                    <label for="BOOK_DATE">Datum rezervacije:</label>
                    <input type="date" name="BOOK_DATE" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="DURATION">Trajanje (dani):</label>
                    <input type="number" name="DURATION" class="form-control" required>
                </div>
               
                <div class="form-group">
                    <label for="BOOK_STATUS">Status rezervacije:</label>
                    <input type="text" name="BOOK_STATUS" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </form>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        </div>
    </div>
</div>
@endsection
