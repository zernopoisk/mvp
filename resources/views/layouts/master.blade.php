<!DOCTYPE html>
<html lang="ru">
    <head>
        @include('layouts.metatags')
        <title>@yield('title') - ЗерноПоиск</title>
        @include('layouts.css')
    </head>
    <body>
        @include('layouts.nav')
        @include('layouts.intro')
        <div class="container">
            @yield('content')
            @include('layouts.footer')
        </div>
    </body>
</html>