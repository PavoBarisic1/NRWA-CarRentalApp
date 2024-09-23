@extends('feedbacks.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card w-50">
        <div class="card-body">
            <h2 class="text-center">Uredi feedback</h2>
            <form action="{{ route('feedbacks.update', $feedback->FED_ID) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="USER_ID">Odaberi korisnika:</label>
                    <select name="USER_ID" class="form-control" required>
                        @foreach($users as $user)
                            <option value="{{ $user->USER_ID }}" {{ $feedback->USER_ID == $user->USER_ID ? 'selected' : '' }}>{{ $user->FNAME }} {{ $user->LNAME }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="COMMENT">Komentar:</label>
                    <textarea name="COMMENT" class="form-control" required>{{ $feedback->COMMENT }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Ažuriraj</button>
            </form>
        </div>
    </div>
</div>
@endsection
