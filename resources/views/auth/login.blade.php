@extends('layouts.app')

@section('title', 'Login')

@section('content')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

<h2>Login</h2>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <label>Username</label>
    <input type="text" name="username" value="{{ old('username') }}" required autofocus>
    @error('username') <span>{{ $message }}</span> @enderror

    <label>Password</label>
    <input type="password" name="password" required>
    @error('password') <span>{{ $message }}</span> @enderror

    <button type="submit">Login</button>
</form>

<a href="{{ route('password.request') }}">Forgot password?</a>
<p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
@endsection
