<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Cursus App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

@include('partials.nav')

<div class="max-w-3xl mx-auto mt-8 bg-white p-6 rounded shadow">
    @yield('content')
</div>

</body>
</html>