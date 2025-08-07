@extends('layouts.app')

@section('title', 'Register')

@section('content')
<h2>Register</h2>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <label>Username</label>
    <input type="text" name="username" value="{{ old('username') }}" required>
    @error('username') <span>{{ $message }}</span> @enderror

    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}" required>
    @error('email') <span>{{ $message }}</span> @enderror

    <label>Phone</label>
    <input type="text" name="phone" value="{{ old('phone') }}" required>
    @error('phone') <span>{{ $message }}</span> @enderror

    <label>Password</label>
    <input type="password" name="password" required>
    @error('password') <span>{{ $message }}</span> @enderror

    <label>Confirm Password</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit">Register</button>
</form>

<p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
@endsection
