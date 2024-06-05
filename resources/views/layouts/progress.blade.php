<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.headprogress')
</head>

<body>
    <div class="container-fluid p-0 d-flex h-100">
        @include('includes.bantuan')
        @include('includes.sidebar')
        @yield('content')
    </div>
</body>

</html>
