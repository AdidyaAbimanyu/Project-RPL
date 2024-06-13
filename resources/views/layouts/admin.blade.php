<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.headprogress')
</head>

<body>
    <div class="admin-layout container-fluid p-0 d-flex">
        @include('includes.sidebaradmin')
        @yield('content')
    </div>
</body>

</html>
