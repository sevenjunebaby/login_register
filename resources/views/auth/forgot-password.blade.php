@extends('layouts.app')

@section('title', 'Forgot Password')

@section('content')
<h2>Forgot Password</h2>

@if(session('status'))
    <div>{{ session('status') }}</div>
@endif
<div class="background">
<form method="POST" class="form" action="{{ route('password.email') }}">
    @csrf

    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}" required>
    @error('email') <span>{{ $message }}</span> @enderror

    <button type="submit">Send Password Reset Link</button>
</form>
</div>
@endsection
