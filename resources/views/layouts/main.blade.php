<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Secret Post</title>
    <!-- backup -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class='font-mono'>
    @include('components.navbar')
    <div class='flex min-h-screen flex-col bg-white sm:items-center'>
        <div class='container mx-auto px-12 py-4 lg:px-80'>    
        @yield('container')
        @include('components.comment')
        </div>
        @include('components.post')
    </div>
    @include('components.footer')
</body>
</html>