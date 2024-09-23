@extends('users.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card w-50">
        <div class="card-body">
            <h2 class="text-center">Dodaj novog korisnika</h2>
            <form action="{{ route('users.store') }}" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="FNAME">Ime:</label>
                    <input type="text" name="FNAME" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="LNAME">Prezime:</label>
                    <input type="text" name="LNAME" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="LIC_NUM">Broj licence:</label>
                    <input type="number" name="LIC_NUM" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="EMAIL">Email:</label>
                    <input type="email" name="EMAIL" class="form-control" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="PHONE_NUMBER">Telefon:</label>
                    <input type="text" name="PHONE_NUMBER" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="PASSWORD">Lozinka:</label>
                    <input type="password" name="PASSWORD" class="form-control" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="GENDER">Spol:</label>
                    <select name="GENDER" class="form-control" required>
                        <option value="M">Muški</option>
                        <option value="F">Ženski</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </form>
        </div>
    </div>
</div>
@endsection
