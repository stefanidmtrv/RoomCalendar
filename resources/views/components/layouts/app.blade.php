<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Calendar</title>
</head>

<body>

    <x-navigation>

    </x-navigation>



    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $title }}
            </h2>

        </div>

    </header>
    <div class="container">
        
            @if (session('message'))
            <div class="alert alert-success">
                <ul>{{ session('message') }}</ul>
            </div>
            @endif
        
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ $slot }}

        </div>
        <script src="{{ asset('js/app.js') }}"></script>

    </div>
</body>

</html>
