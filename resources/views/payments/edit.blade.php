@extends('payments.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card w-50">
        <div class="card-body">
            <h2 class="text-center">Uredi plaćanje</h2>
            <form action="{{ route('payments.update', $payment->PAY_ID) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="BOOK_ID">Odaberi rezervaciju:</label>
                    <select name="BOOK_ID" class="form-control" required>
                        @foreach($bookings as $booking)
                            <option value="{{ $booking->BOOK_ID }}" {{ $payment->BOOK_ID == $booking->BOOK_ID ? 'selected' : '' }}>{{ $booking->BOOK_PLACE }} - {{ $booking->PRICE }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="CARD_NO">Broj kartice:</label>
                    <input type="text" name="CARD_NO" value="{{ $payment->CARD_NO }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="EXP_DATE">Datum isteka:</label>
                    <input type="text" name="EXP_DATE" value="{{ $payment->EXP_DATE }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="CVV">CVV:</label>
                    <input type="text" name="CVV" value="{{ $payment->CVV }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="PRICE">Cijena:</label>
                    <input type="number" name="PRICE" value="{{ $payment->PRICE }}" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Ažuriraj</button>
            </form>
        </div>
    </div>
</div>
@endsection
