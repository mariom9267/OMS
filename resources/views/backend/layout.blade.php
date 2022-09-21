<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Office Management System</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        @include('backend.inc.style')
    </head>
    <body>
      @include('backend.inc.sidebar')

        <main class="content">
           @include('backend.inc.navbar')
         @yield('content')
          @include('backend.inc.footer')
        </main>

@include('backend.inc.script')
    </body>
</html>
