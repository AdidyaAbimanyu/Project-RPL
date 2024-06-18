<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.headprogress')
    <style>
        .content {
            background-size: cover;
            background-repeat: no-repeat;
        }

        .content-1 {
            background-image: url('/image/one.png');
        }

        .content-2 {
            background-image: url('/image/four.png');
        }

        .content-3 {
            background-image: url('/image/five.png');
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0 d-flex h-100">
        @include('includes.bantuan')
        @include('includes.sidebar')
        @yield('content')
    </div>
</body>

</html>
