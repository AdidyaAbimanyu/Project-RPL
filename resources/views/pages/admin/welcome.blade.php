@extends('layouts.admin')
@section('content')
    <div class="bg-success-2 flex-fill d-flex flex-column justify-content-center align-items-center">
        <h1 style="font-size: 50px;">Welcome, {{ Auth::user()->name }}!</h1>
        <div class="mt-3">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>
@endsection
