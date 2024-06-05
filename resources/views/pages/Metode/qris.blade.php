@extends('layouts.progress')
@section('content')
    <div class="bg-success-2 flex-fill d-flex justify-content-center align-items-center">
        <div class="card text-center border-0 rounded-4" style="width: 36rem;">
            <div class="card-body">
                <div class="my-5">{!! $qrCode !!}</div>
                {{-- <h2 class="fw-bold">{{ $hasil }}</h2> --}}
            </div>
        </div>
    </div>
@stop
