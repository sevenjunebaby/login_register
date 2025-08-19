@extends('layouts.app')

@section('title', 'Welcome')

@section('content') 


<div class="background">



<form class="form" method="POST" action="{{ route('logout') }}">
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <div {{ __('Dashboard') }}>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
    @csrf
    <button type="submit">Logout</button>
</form>

</div>
@endsection
