@extends('bookings.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card w-50">
        <div class="card-body">
            <h2 class="text-center">Uredi rezervaciju</h2>
            <form action="{{ route('bookings.update', $booking->BOOK_ID) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="CAR_ID">Odaberi auto:</label>
                    <select name="CAR_ID" class="form-control" required>
                        @foreach($cars as $car)
                            <option value="{{ $car->CAR_ID }}" {{ $booking->CAR_ID == $car->CAR_ID ? 'selected' : '' }}>{{ $car->CAR_NAME }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="USER_ID">Odaberi korisnika:</label>
                    <select name="USER_ID" class="form-control" required>
                        @foreach($users as $user)
                            <option value="{{ $user->USER_ID }}" {{ $booking->USER_ID == $user->USER_ID ? 'selected' : '' }}>{{ $user->FNAME }} {{ $user->LNAME }}</option>
                        @endforeach
                    </select>
                    
                </div>
                <div class="form-group">
                    <label for="BOOK_PLACE">Mjesto rezervacije:</label>
                    <input type="text" name="BOOK_PLACE" value="{{ $booking->BOOK_PLACE }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="BOOK_DATE">Datum rezervacije:</label>
                    <input type="date" name="BOOK_DATE" value="{{ $booking->BOOK_DATE }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="DURATION">Trajanje (dani):</label>
                    <input type="number" name="DURATION" value="{{ $booking->DURATION }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="PHONE_NUMBER">Broj telefona:</label>
                    <input type="text" name="PHONE_NUMBER" value="{{ $booking->PHONE_NUMBER }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="DESTINATION">Odredište:</label>
                    <input type="text" name="DESTINATION" value="{{ $booking->DESTINATION }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="RETURN_DATE">Datum povratka:</label>
                    <input type="date" name="RETURN_DATE" value="{{ $booking->RETURN_DATE }}" class="form-control" required>
                </div>
               
                <div class="form-group">
                    <label for="BOOK_STATUS">Status rezervacije:</label>
                    <input type="text" name="BOOK_STATUS" value="{{ $booking->BOOK_STATUS }}" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Ažuriraj</button>
            </form>
        </div>
    </div>
</div>
@endsection

