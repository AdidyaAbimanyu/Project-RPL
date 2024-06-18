<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    <style>
        body {
            background-image: url('/image/lion.png');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div id="main">
            @include('includes.bantuan')
            @yield('content')
        </div>
    </div>
</body>

</html>
