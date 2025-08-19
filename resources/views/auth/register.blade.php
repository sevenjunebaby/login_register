@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="background">
 
   

    <form method="POST" class="form" action="{{ route('register') }}">
        @csrf
         <h2>Register</h2>
        <label></label>
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
        @error('name') <span>{{ $message }}</span> @enderror


        <label></label>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        @error('email') <span>{{ $message }}</span> @enderror

        <label></label>
        <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}" required>
        @error('phone') <span>{{ $message }}</span> @enderror

        <label></label>
        <input type="password" name="password" placeholder="Password" required>
        @error('password') <span>{{ $message }}</span> @enderror

        <label></label>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
     
        <button type="submit">Register</button>
         <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
 
    </form>

   
</div>
@endsection
