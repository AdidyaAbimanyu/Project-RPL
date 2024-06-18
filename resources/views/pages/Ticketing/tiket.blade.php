@extends('layouts.progress')
@section('content')
    <div class="content content-3 flex-fill">
        <div class="row d-flex h-100 align-items-center m-0">
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
                {{-- <span class="h-100 fw-bold" style="margin-bottom: 10px; display: none;" id="harga-total">0</span> --}}
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
    <div class="modal fade" id="tiketModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tidak ada ketersediaan tiket lagi
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Ambil ketersediaan tiket dari backend
        var ketersediaanTiketAnak = {{ $anak->ketersediaan }};
        var ketersediaanTiketDewasa = {{ $dewasa->ketersediaan }};
        var hargaAnak = {{$anak->harga}};
        var hargaDewasa = {{$dewasa->harga}}
        var jumlahAnak = 0;
        var jumlahDewasa = 0;

        document.getElementById('create-session').addEventListener('click', function() {
            var jumlahAnak = parseInt(document.getElementById('jumlah-anak').innerText);
            var jumlahDewasa = parseInt(document.getElementById('jumlah-dewasa').innerText);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ route("create.session") }}', true);
            xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.send(JSON.stringify({
                jumlah_anak: jumlahAnak,
                jumlah_dewasa: jumlahDewasa
            }));
        });

        function updateCounter(id, operation, maxLimit) {
            var counter = document.getElementById(id);
            var harga = document.getElementById("harga-total");
            var count = parseInt(counter.innerText);

            if (operation === 'increase') {
                if (count < maxLimit) {
                    count += 1;
                    if (id == "jumlah-anak") {
                        jumlahAnak += 1;
                    } else if (id == "jumlah-dewasa") {
                        jumlahDewasa += 1;
                    }
                } else {
                    $('#tiketModal').modal('show');
                    return;
                }
            } else if (operation === 'decrease' && count > 0) {
                count -= 1;
                if (id == "jumlah-anak") {
                    jumlahAnak -= 1;
                } else if (id == "jumlah-dewasa") {
                    jumlahDewasa -= 1;
                }
            }

            counter.innerText = count;
            var totalHarga = (jumlahAnak * hargaAnak) + (jumlahDewasa * hargaDewasa);
            harga.innerText = 'Rp ' + totalHarga.toLocaleString('id-ID', { minimumFractionDigits: 0 }) + ',-';

            if (totalHarga > 0) {
                harga.style.display = 'inline';
            } else {
                harga.style.display = 'none';
            }
        }

        document.getElementById('plus-anak').addEventListener('click', function() {
            updateCounter('jumlah-anak', 'increase', ketersediaanTiketAnak);
        });

        document.getElementById('minus-anak').addEventListener('click', function() {
            updateCounter('jumlah-anak', 'decrease');
        });

        document.getElementById('plus-dewasa').addEventListener('click', function() {
            updateCounter('jumlah-dewasa', 'increase', ketersediaanTiketDewasa);
        });

        document.getElementById('minus-dewasa').addEventListener('click', function() {
            updateCounter('jumlah-dewasa', 'decrease');
        });

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('#tiketModal button[data-dismiss="modal"]').addEventListener('click', function() {
                $('#tiketModal').modal('hide');
            })
            document.querySelector('#tiketModal .modal-footer button[data-dismiss="modal"]').addEventListener('click', function() {
                $('#tiketModal').modal('hide');
            })
        });
    </script>
@stop
