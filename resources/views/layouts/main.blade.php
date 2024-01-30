<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Secret Post</title>
</head>
<body class='font-mono'>
    <div class='flex min-h-screen flex-col bg-white sm:items-center'>
    @include('components.navbar')
        <div class='container mx-auto px-12 py-4 lg:px-80'>    
        @yield('container')
        @include('components.comment')
        </div>
    @include('components.post')
    </div>
</body>
</html>