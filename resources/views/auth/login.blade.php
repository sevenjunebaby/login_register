@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="background">

    

    <form method="POST" class="form" action="{{ route('login') }}">
        @csrf
        <h2>Login</h2>
        <label></label>
        <input type="text" name="username" placeholder="username" value="{{ old('username') }}" required autofocus>
        @error('username') 
            <span>{{ $message }}</span> 
        @enderror

        <label></label>
        <input type="password" name="password" placeholder="password" required>
        @error('password') 
            <span>{{ $message }}</span> 
        @enderror
        <br>
        <button type="submit">Login</button>
         <a href="{{ route('password.request') }}">Forgot password?</a>
    <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>

    </form>

   
 
</div>
@endsection
