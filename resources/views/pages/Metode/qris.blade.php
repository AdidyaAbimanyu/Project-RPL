@extends('layouts.progress')
@section('content')
    <div class="content content-1 flex-fill d-flex justify-content-center align-items-center">
        <div class="card text-center border-0 rounded-4" style="width: 36rem;">
            <div class="card-body">
                <div class="my-5">{!! $qrCode !!}</div>
                <form method="POST" action="{{ route('submit.nominal') }}">
                    @csrf
                    <h2 class="fw-bold"> Harga Tiket: Rp {{ number_format(Session::get('value') , 0, ',', '.') }}</h2>
                    <input type="number" class="form-control" id="nominal" name="nominal" placeholder="Masukkan nominal">
                    <div class="my-3">
                        <button type="submit" class="btn btn-success">Selanjutnya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
