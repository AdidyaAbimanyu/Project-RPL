@extends('layouts.progress')
@section('content')
    <div class="bg-success-2 flex-fill">
        <div class="row d-flex h-100 align-items-center">
            <div class="col-6 d-flex flex-column align-items-center">
                <div class="card text-center border-0 rounded-4" style="width: 18rem;">
                    <div class="card-header border-0 bg-success rounded-4 text-white">
                        <h3>Anak-Anak</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa-solid fa-circle-minus" id="minus-anak"></i>
                            </div>
                            <div class="col-8 border-bottom border-black border-3">
                                <span id="jumlah-anak" class="h-100 fw-bold">0</span>
                            </div>
                            <div class="col-2">
                                <i class="fa-solid fa-circle-plus" id="plus-anak"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card text-center border-0 my-5" style="width: 18rem;">
                    <div class="card-header border-0 bg-success text-white">
                        <h3>Dewasa</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa-solid fa-circle-minus" id="minus-dewasa"></i>
                            </div>
                            <div class="col-8 border-bottom border-black border-3">
                                <span id="jumlah-dewasa" class="h-100 fw-bold">0</span>
                            </div>
                            <div class="col-2">
                                <i class="fa-solid fa-circle-plus" id="plus-dewasa"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ url('/pembayaran') }}"class="btn btn-success px-4 fw-bold fs-5" id="create-session">Selanjutnya</a>
            </div>


            <div class="col-6 d-flex justify-content-center">
                <div class="card text-center border-0 rounded-4" style="width: 18rem;">
                    <div class="card-header border-0 bg-success text-white rounded-4 py-3">
                        <h3>Solo Zoo</h3>
                    </div>
                    <div class="card-body">
                        <div class="bg-success text-white rounded-4 py-3 my-4">
                            <h4>Anak-Anak</h4>
                            <h5>Rp {{ number_format($anak->harga, 0, ',', '.') }},-/Orang</h5>
                        </div>
                        <div class="bg-success text-white rounded-4 py-3 my-3">
                            <h4>Dewasa</h4>
                            <h5>Rp {{ number_format($dewasa->harga, 0, ',', '.') }},-/Orang</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('create-session').addEventListener('click', function() {
            // Lakukan request AJAX ke endpoint yang akan membuat session
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '{{ route("create.session") }}', true);
            xhr.send();
        });
    </script>
@stop
