<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel DC Comics</title>

        <!-- Styles -->
        @vite('resources/js/app.js')

    </head>

    <body>
        
        <main>
            @yield('content')
            
            <div class="all-date">
                <a href="{{ route('comics.index') }}">All date</a>
            </div>
        </main>

    </body>

</html>