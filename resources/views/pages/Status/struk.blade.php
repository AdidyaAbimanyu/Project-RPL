@extends('layouts.progress')
@section('content')
    <div class="bg-success-2 flex-fill d-flex justify-content-center align-items-center">
        <div class="card text-center border-0 rounded-4" style="width: 36rem;">
            <div class="card-body">
                <p>Tiket List</p>
                <p>Tiket Dewasa: {{Session::get('tiket_dewasa')}}</p>
                <p>Tiket anak: {{Session::get('tiket_anak')}}</p>
                <p>-------------</p>
                <p>Harga Tiket: Rp {{ number_format(Session::get('value') , 0, ',', '.') }}</p>
                <p style="margin-top: 20px;">Ambil tiket dibawah!</p>
                <a href="{{ url('/main') }}" class="btn btn-primary">Exit</a>
            </div>
        </div>
    </div>
@stop
