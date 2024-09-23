@extends('payments.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card w-50">
        <div class="card-body">
            <h2 class="text-center">Dodaj novo plaćanje</h2>
            <form action="{{ route('payments.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="BOOK_ID">Odaberi rezervaciju:</label>
                    <select name="BOOK_ID" class="form-control" required>
                        @foreach($bookings as $booking)
                            <option value="{{ $booking->BOOK_ID }}">{{ $booking->BOOK_PLACE }} - {{ $booking->DESTINATION }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="CARD_NO">Broj kartice:</label>
                    <input type="text" name="CARD_NO" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="EXP_DATE">Datum isteka:</label>
                    <input type="text" name="EXP_DATE" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="CVV">CVV:</label>
                    <input type="text" name="CVV" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="PRICE">Cijena:</label>
                    <input type="number" name="PRICE" class="form-control" required>
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
