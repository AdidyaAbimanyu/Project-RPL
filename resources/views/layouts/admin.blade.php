<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.headprogress')
</head>

<body>
    <div class="container-fluid p-0 d-flex h-100">
        @include('includes.sidebaradmin')
        @yield('content')
    </div>
</body>

</html>
