<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <title>{{isset($pageTitle) ? $pageTitle . '|' .config('app.name') : config('app.name')}}</title> -->
        <title>{{page_title($pageTitle ?? null)}}</title>

        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
        <main role="main" class="flex flex-col justify-center items-center">
           @yield('content')
        </main>
        
        @include('layouts/partials/_footer')
    </body>
</html>