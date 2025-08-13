@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="background">
  <div class="form">
    <h2>Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label></label>
        <input type="text" name="username" placeholder="username" value="{{ old('username') }}" required>
        @error('username') <span>{{ $message }}</span> @enderror

        <label></label>
        <input type="email" name="email" placeholder="email" value="{{ old('email') }}" required>
        @error('email') <span>{{ $message }}</span> @enderror

        <label></label>
        <input type="text" name="phone" placeholder="phone" value="{{ old('phone') }}" required>
        @error('phone') <span>{{ $message }}</span> @enderror

        <label></label>
        <input type="password" name="password" placeholder="password" required>
        @error('password') <span>{{ $message }}</span> @enderror

        <label></label>
        <input type="password" name="password_confirmation" placeholder="confirm password" required>
         <br>
        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
  </div>
</div>
@endsection
