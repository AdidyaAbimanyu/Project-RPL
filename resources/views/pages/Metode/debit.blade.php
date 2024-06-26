@extends('layouts.progress')
@section('content')
    <div class="content content-1 flex-fill d-flex justify-content-center align-items-center">
        <div class="card text-center border-0 rounded-4" style="width: 36rem;">
            <div class="card-body">
                <h1 class="fw-bold my-5">Gesek kartu anda<br>dibawah</h1>
                <i class="fa-solid fa-arrow-down-long mb-5" style="font-size: 200px;"></i>
                <form method="POST" action="{{ route('submit.nominal') }}">
                    @csrf
                    <h2 class="fw-bold"> Harga Tiket: Rp {{ number_format(Session::get('value') , 0, ',', '.') }}</h2>
                    <input type="hidden" name="nominal" value="{{Session::get('value')}}">
                    <div class="my-3">
                        <button type="submit" class="btn btn-success px-5">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
