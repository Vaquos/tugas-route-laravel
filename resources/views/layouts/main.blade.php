<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        main>.container {
            padding: 60px 15px 0;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    @include('layouts/header')
    <main class="flex-shrink-0">
        <div class="container">
            @yield('content')
        </div>
    </main>
    @include('layouts/footer')
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>