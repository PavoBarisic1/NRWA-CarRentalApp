@extends('feedbacks.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100 flex-column ">
<div class="text-center mb-3">
    <a href="{{ route('admin') }}" class="btn btn-secondary">Admin Dashboard</a>
    </div>
    <div class="card w-75">
        <div class="card-body">
            <h2 class="text-center">Popis feedbackova</h2>
            <a href="{{ route('feedbacks.create') }}" class="btn btn-primary mb-3">Dodaj feedback</a>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Korisnik</th>
                        <th>Komentar</th>
                        <th>Akcije</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedbacks as $feedback)
                    <tr>
                        <td>{{ $feedback->FED_ID }}</td>
                        <td>{{ $feedback->user->FNAME }} {{ $feedback->user->LNAME }}</td>
                        <td>{{ $feedback->COMMENT }}</td>
                        <td class="d-flex">
                            <a href="{{ route('feedbacks.edit', $feedback->FED_ID) }}" class="btn btn-primary mr-2">Uredi</a>
                            <form action="{{ route('feedbacks.destroy', $feedback->FED_ID) }}" method="POST" class="d-inline-block">
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
