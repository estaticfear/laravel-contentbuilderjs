<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>CBLDJS - @yield('title', 'Template builder')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        @include('content-builder-js::parts.header')
        <link href="{{ config('content-builder-js.contentbuilder_css') }}" rel="stylesheet" type="text/css" />
        @stack('stylesheets')
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
    @include('content-builder-js::parts.footer')
    @stack('scripts')
</html>
