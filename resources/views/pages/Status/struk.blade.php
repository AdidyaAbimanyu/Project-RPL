@extends('layouts.progress')
@section('content')
    <div class="content content-2 flex-fill d-flex justify-content-center align-items-center">
        {{-- <div class="card text-center border-0 rounded-4" style="width: 36rem;">
            <div class="card-body">
                <p>Tiket List</p>
                <p>Tiket Dewasa: {{Session::get('tiket_dewasa')}}</p>
                <p>Tiket anak: {{Session::get('tiket_anak')}}</p>
                <p>-------------</p>
                <p>Harga Tiket: Rp {{ number_format(Session::get('value') , 0, ',', '.') }}</p>
                <p style="margin-top: 20px;">Ambil tiket dibawah!</p>
                <a href="{{ url('/main') }}" class="btn btn-primary">Exit</a>
            </div>
        </div> --}}
        <div class="card text-center border-0 rounded-4" style="width: 32rem;">
            <div class="card-header border-0 bg-success text-white rounded-4 py-2">
                <h3>Detail Pembelian Tiket</h3>
            </div>
            <div class="card-body">
                <p>Tiket Dewasa: {{Session::get('tiket_dewasa')}}</p>
                <p>Tiket anak: {{Session::get('tiket_anak')}}</p>
                <hr>
                <p>Harga Tiket: Rp {{ number_format(Session::get('value') , 0, ',', '.') }}</p>
                <hr>
                <a href="{{ url('/main') }}" class="btn btn-success px-4">Exit</a>
                <p style="margin-top: 20px;">Ambil tiket dibawah!</p>
                <i class="fa-solid fa-arrow-down-long mb-2" style="font-size: 100px;"></i>
            </div>
        </div>
    </div>
@stop
