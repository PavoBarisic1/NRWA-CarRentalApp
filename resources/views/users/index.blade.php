@extends('users.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100 flex-column">
<div class="text-center mb-3">
    <a href="{{ route('admin') }}" class="btn btn-secondary">Admin Dashboard</a>
    </div>
    <div class="card w-75">
        <div class="card-body">
            <h2 class="text-center">Popis korisnika</h2>
            <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Dodaj korisnika</a>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Email</th>
                        <th>Broj tablice</th>
                        <th>Broj telefona</th>
                        <th>Spol</th>
                        <th>Akcije</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->USER_ID }}</td>
                        <td>{{ $user->FNAME }}</td>
                        <td>{{ $user->LNAME }}</td>
                        <td>{{ $user->EMAIL }}</td>
                        <td>{{ $user->LIC_NUM }}</td>
                        <td>{{ $user->PHONE_NUMBER }}</td>
                        <td>{{ $user->GENDER }}</td>
                        <td class="d-flex">
                            <a href="{{ route('users.edit', $user->USER_ID) }}" class="btn btn-primary me-2">Uredi</a>
                            <form action="{{ route('users.destroy', $user->USER_ID) }}" method="POST">
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
