<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ config('app.name') }} | @yield('title')</title>
<meta name="description" content="@yield('description')">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('links')
    @if(config('h5b.manifest'))
        <link rel="manifest" href="{{ config('h5b.manifest_url') }}">
    @endif
    @if(config('h5b.appleicon'))
        <link rel="apple-touch-icon" href="{{ config('h5b.appleicon_url') }}">
        <!-- Place favicon.ico in the root directory -->
    @endif
@show

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@show
