@extends('layouts.progress')
@section('content')
    <div class="content content-1 flex-fill">
        <div class="row d-flex h-100 align-items-center m-0">
            <div class="col-6 d-flex flex-column align-items-center">
                <a href="{{ route('qris', ['value => 15000']) }}" class="text-decoration-none">
                    <div class="card text-center border-0 rounded-4" style="width: 28rem;">
                        <div class="card-body">
                            <img src="{{ asset('image/QRIS.png') }}" alt="QRIS" width="300">
                            <h2 class="fw-bold">QRIS</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <a href="{{ url('/pembayaran/kartu') }}" class="text-decoration-none">
                    <div class="card text-center border-0 rounded-4" style="width: 28rem;">
                        <div class="card-body">
                            <img src="{{ asset('image/Debit.png') }}" alt="Debit / Kredit" width="300">
                            <h2 class="fw-bold">Debit / Kredit</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@stop
