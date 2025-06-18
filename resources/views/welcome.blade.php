<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Welcome</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>
    <body class="font-sans antialiased bg-gray-100 text-gray-900">
        <div class="min-h-screen flex flex-col items-center justify-center">
            <h1 class="text-4xl font-bold mb-8">Welcome to the Application</h1>
            <div class="space-x-4">
                <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Login</a>
                <a href="{{ route('register') }}" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Register</a>
                <a href="{{ route('ubah.password') }}" class="px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">Change Password</a>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
