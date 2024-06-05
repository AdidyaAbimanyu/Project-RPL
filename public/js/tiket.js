$(document).ready(function() {
    const $jumlahAnak = $('#jumlah-anak');
    const $plusAnak = $('#plus-anak');
    const $minusAnak = $('#minus-anak');
    let countAnak = 0;

    $plusAnak.on('click', function() {
        countAnak++;
        $jumlahAnak.text(countAnak);
    });

    $minusAnak.on('click', function() {
        if (countAnak > 0) {
            countAnak--;
            $jumlahAnak.text(countAnak);
        }
    });

    const $jumlahDewasa = $('#jumlah-dewasa');
    const $plusDewasa = $('#plus-dewasa');
    const $minusDewasa = $('#minus-dewasa');
    let countDewasa = 0;

    $plusDewasa.on('click', function() {
        countDewasa++;
        $jumlahDewasa.text(countDewasa);
    });

    $minusDewasa.on('click', function() {
        if (countDewasa > 0) {
            countDewasa--;
            $jumlahDewasa.text(countDewasa);
        }
    });

    // function simpanJumlah() {
    //     $.ajax({
    //         url: '{{ route("pesan-tiket") }}',
    //         method: 'POST',
    //         data: {
    //             jumlahAnak: countAnak,
    //             jumlahDewasa: countDewasa,
    //             _token: '{{ csrf_token() }}'
    //         },
    //         success: function(response) {
    //             if (response.success) {
    //                 window.location.href = '{{ route("pembayaran.qris") }}';
    //             } else {
    //                 alert('Gagal menyimpan jumlah');
    //             }
    //         },
    //         error: function() {
    //             alert('Terjadi kesalahan');
    //         }
    //     });
    // }

    // $('.btn-success').on('click', function(event) {
    //     event.preventDefault();
    //     simpanJumlah();
    // });
});
