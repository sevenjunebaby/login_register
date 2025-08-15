@extends('layouts.app')

@section('title', 'Forgot Password')

@section('content')
    @if(session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <div class="background">
        <form method="POST" class="form" action="{{ route('password.email') }}">
            @csrf
            <h2>Forgot Password</h2>
            <label></label>
            <input type="email" name="email" placeholder="your email" value="{{ old('email') }}" required>
            @error('email') <span>{{ $message }}</span> @enderror
            <button type="submit">Reset</button>
        </form>
    </div>
@endsection
