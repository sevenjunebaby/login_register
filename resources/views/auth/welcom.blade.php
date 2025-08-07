@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<h1>Welcome, {{ auth()->user()->username }}!</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
@endsection
