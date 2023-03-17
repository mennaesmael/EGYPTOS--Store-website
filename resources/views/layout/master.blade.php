<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','EGYPTOS')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500&display=swap" rel="stylesheet">
        {{-- style --}}
        @vite('resources/css/app.css')
    </head>
    <body >
    <body class="bg-primary text-slate-50">
          
<div >
{{-- start the nav bar --}}
@include('layout.navbar')
{{-- end  the nav bar --}}

@section('content')

@show



 {{-- start footer--}}
 @include('layout.footer')
   {{-- end footer --}}
    </body>
</html>
