@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
<div class="background">

    <form method="POST" class="form" action="{{ route('password.update') }}">
        @csrf

        <h2>Reset Password</h2>

        <input type="hidden" name="token" value="{{ $token }}">

        {{-- Email --}}
        <label></label>
        <input id="email" 
               type="email" 
               name="email" 
               placeholder="Email Address"
               value="{{ $email ?? old('email') }}" 
               required 
               autocomplete="email" 
               autofocus>
        @error('email')
            <span>{{ $message }}</span>
        @enderror


        {{-- New Password --}}
        <label></label>
        <input id="password" 
               type="password" 
               name="password" 
               placeholder="New Password"
               required 
               autocomplete="new-password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror


        {{-- Confirm Password --}}
        <label></label>
        <input id="password-confirm" 
               type="password" 
               name="password_confirmation" 
               placeholder="Confirm Password"
               required 
               autocomplete="new-password">


        <button type="submit">Reset Password</button>

    </form>

</div>
@endsection
