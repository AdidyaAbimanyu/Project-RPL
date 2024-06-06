@extends('layouts.progress')
@section('content')
    <div class="bg-success-2 flex-fill d-flex justify-content-center align-items-center">
        <div class="card text-center border-0 rounded-4" style="width: 36rem;">
            <div class="card-body">
                <div class="my-5">{!! $qrCode !!}</div>
                <form method="POST" action="{{ route('submit.nominal') }}">
                    @csrf
                    <h2 class="fw-bold"> Harga Tiket: Rp 20.000</h2>
                    <input type="number" class="form-control" id="nominal" name="nominal" placeholder="Masukkan nominal">
                    <div class="my-3">
                        <button type="submit" class="btn btn-primary">Selanjutnya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
