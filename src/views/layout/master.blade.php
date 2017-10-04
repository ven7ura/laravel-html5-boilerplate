<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">
<head>
    @include('layout.head')
</head>
<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    @include('layout.body')

    @include('layout.tail')
</body>
