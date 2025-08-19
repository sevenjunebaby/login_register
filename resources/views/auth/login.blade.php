@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="background">
    <form method="POST" class="form" action="{{ route('login') }}">
        @csrf
        <h2>Login</h2>
        
        <label></label>
        <input type="text" name="login" placeholder="Email or Phone" value="{{ old('login') }}" required autofocus>
        @error('login') 
            <span>{{ $message }}</span> 
        @enderror

        <label></label>
        <input type="password" name="password" placeholder="Password" required>
        @error('password') 
            <span>{{ $message }}</span> 
        @enderror

        <a href="{{ route('password.request') }}">Forgot password?</a>
        
        <button type="submit">Login</button>
         
        <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
    </form>
</div>
@endsection
