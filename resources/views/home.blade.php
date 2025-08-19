@extends('layouts.app')

@section('title', 'Welcome')

@section('content') 


<div class="background">



<form class="form" method="POST" action="{{ route('logout') }}">
    <h1>Welcome
        <br> {{ auth()->user()->name }} ♡</h1>
    
    <div {{ __('Dashboard') }}>
        
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}
                </div>
    @csrf
    <input type="image" src="/assets/images/home.png" alt="Logout" width="35" height="35">

</form>

</div>
@endsection
