<!-- resources/views/payment.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pembayaran</title>
</head>

<body>
    <h1>Halaman Pembayaran</h1>
    <p>Silakan lengkapi formulir pembayaran di bawah ini:</p>

    <form>
        @csrf
        <a href="{{ route('payment.success') }}" class="btn btn-primary">Bayar</a>
    </form>

</body>

</html>
