@extends('layouts.progress')
@section('content')
    <div class="content content-1 flex-fill d-flex justify-content-center align-items-center">
        <div class="card text-center border-0 rounded-4" style="width: 36rem;">
            <div class="card-body">
                <i class="fa-solid fa-circle-xmark my-5" style="font-size: 200px;"></i>
                <h1 class="fw-bold mb-5 text-danger">Pembayaran Gagal</h1>
                <h1 class="fw-bold mb-5 text-danger">{{ $message ?? 'Uang tidak mencukupi!' }}</h1>
                <a href="{{ url('/pembayaran') }}" class="btn btn-success">Kembali</a>
            </div>
        </div>
    </div>
@stop
