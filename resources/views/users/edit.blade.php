@extends('users.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card w-50">
        <div class="card-body">
            <h2 class="text-center">Uredi korisnika</h2>
            <form action="{{ route('users.update', $user->USER_ID) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="FNAME">Ime:</label>
                    <input type="text" name="FNAME" value="{{ $user->FNAME }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="LNAME">Prezime:</label>
                    <input type="text" name="LNAME" value="{{ $user->LNAME }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="EMAIL">Email:</label>
                    <input type="email" name="EMAIL" value="{{ $user->EMAIL }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="PHONE_NUMBER">Broj telefona:</label>
                    <input type="text" name="PHONE_NUMBER" value="{{ $user->PHONE_NUMBER }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="GENDER">Spol:</label>
                    <select name="GENDER" class="form-control" required>
                        <option value="M" {{ $user->GENDER == 'M' ? 'selected' : '' }}>Muški</option>
                        <option value="F" {{ $user->GENDER == 'F' ? 'selected' : '' }}>Ženski</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ažuriraj</button>
            </form>
        </div>
    </div>
</div>
@endsection
