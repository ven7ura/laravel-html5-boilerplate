<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ config('app.name') }} | @yield('title')</title>
<meta name="description" content="@yield('description')">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('links')
    @if(config()->has('h5b.manifest'))
        <link rel="manifest" href="{{ config('h5b.manifest') }}">
    @endif
    @if(config()->has('h5b.appleicon'))
        <link rel="apple-touch-icon" href="{{ config('h5b.appleicon') }}">
    @endif
    <!-- Place favicon.ico in the root directory -->
@show

@section('styles')
    @if(config()->has('h5b.bootstrap4'))
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    @endif
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@show
