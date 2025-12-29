<!DOCTYPE html>
<html lang="id" class="overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Nike Tuning N Performance</title>
    <link rel="icon" type="image/png" href="{{ asset('/images/nike_tuning.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 overflow-x-hidden pt-20">
    @include('partials.navbar')

    <!-- Main Content -->
    @yield('content')

    @include('partials.footer')
</body>
</html>