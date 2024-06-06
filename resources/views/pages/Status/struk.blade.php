@extends('layouts.progress')
@section('content')
    <div class="bg-success-2 flex-fill d-flex justify-content-center align-items-center">
        <div class="card text-center border-0 rounded-4" style="width: 36rem;">
            <div class="card-body">
                <p>Tiket List</p>
                <p>Tiket Dewasa: 1</p>
                <p>Tiket anak: 1</p>
                <p>-------------</p>
                <p>Harga: Rp20.000</p>
                <p style="margin-top: 20px;">Ambil tiket dibawah!</p>
                <a href="{{ url('/main') }}" class="btn btn-primary">Exit</a>
            </div>
        </div>
    </div>
@stop
