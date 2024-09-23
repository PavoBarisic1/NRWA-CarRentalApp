@extends('feedbacks.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card w-50">
        <div class="card-body">
            <h2 class="text-center">Dodaj novi feedback</h2>
            <form action="{{ route('feedbacks.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="USER_ID">Odaberi korisnika:</label>
                    <select name="USER_ID" class="form-control" required>
                        @foreach($users as $user)
                            <option value="{{ $user->USER_ID }}">{{ $user->FNAME }} {{ $user->LNAME }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="COMMENT">Komentar:</label>
                    <textarea name="COMMENT" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </form>
        </div>
    </div>
</div>
@endsection
