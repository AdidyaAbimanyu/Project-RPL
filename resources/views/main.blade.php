@extends('layouts.default')
@section('content')
    <div class="row justify-content-center text-center">
        <div class="col-12">
            <h1>Selamat Datang di Solo Zoo0000</h1>
        </div>
        <div class="col-12 mt-5">
            <a href="{{ url('/tiket') }}" type="button" class="btn btn-light fs-4 fw-bold px-5">Pesan Tiket</a>
        </div>
    </div>
@stop
