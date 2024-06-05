<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
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
