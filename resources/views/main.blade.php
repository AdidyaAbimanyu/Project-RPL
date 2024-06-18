@extends('layouts.default')
@section('content')
    <div class="row justify-content-center text-center text-white">
        <div class="col-12">
            <h1>Selamat Datang di Solo Zoo</h1>
            <p class="mt-4">Nikmati petualangan menakjubkan di kebun binatang kami yang penuh dengan keajaiban alam dan
                keanekaragaman satwa dari seluruh dunia. Di sini, Anda akan menemukan berbagai spesies hewan yang hidup di
                habitat yang dirancang menyerupai lingkungan alami mereka. Mulai dari mamalia besar seperti singa dan gajah,
                hingga reptil eksotis dan burung-burung berwarna-warni, setiap sudut kebun binatang ini menawarkan
                pemandangan yang memukau dan pengalaman belajar yang mendalam.</p>
        </div>
        <div class="col-12 mt-4">
            <a href="{{ url('/tiket') }}" type="button" class="btn btn-light fs-4 fw-bold px-5">Pesan Tiket</a>
        </div>
    </div>
@stop
