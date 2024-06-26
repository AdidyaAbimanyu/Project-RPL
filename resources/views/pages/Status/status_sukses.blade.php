@extends('layouts.progress')
@section('content')
    <div class="content content-1 flex-fill d-flex justify-content-center align-items-center">
        <div class="card text-center border-0 rounded-4" style="width: 36rem;">
            <div class="card-body">
                <i class="fa-solid fa-circle-check my-5" style="font-size: 200px;"></i>
                <h1 class="fw-bold mb-5 text-success">Pembayaran Berhasil</h1>
                <div class="my-3">
                    <a href="{{ url('/struk') }}" class="btn btn-success">Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>
@stop
