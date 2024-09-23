@extends('payments.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100 flex-column">
<div class="text-center mb-3">
    <a href="{{ route('admin') }}" class="btn btn-secondary">Admin Dashboard</a>
    </div>
    <div class="card w-75">
        <div class="card-body">
            <h2 class="text-center">Popis plaćanja</h2>
            <a href="{{ route('payments.create') }}" class="btn btn-primary mb-3">Dodaj plaćanje</a>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rezervacija (Mjesto - Destinacija)</th>
                        <th>Broj kartice</th>
                        <th>Cijena</th>
                        <th>Akcije</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->PAY_ID }}</td>
                        <td>{{ $payment->booking->BOOK_PLACE }} - {{ $payment->booking->DESTINATION }}</td>
                        <td>{{ $payment->CARD_NO }}</td>
                        <td>{{ $payment->PRICE }}</td>
                        <td class="d-flex">
                            <a href="{{ route('payments.edit', $payment->PAY_ID) }}" class="btn btn-primary mr-2">Uredi</a>
                            <form action="{{ route('payments.destroy', $payment->PAY_ID) }}" method="POST" class="d-inline-block">
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
