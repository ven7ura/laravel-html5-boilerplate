# Laravel HTML5 Boilerplate

This package gives the user a basic front-end template to bootstrap any project. Its heavly influenced by the [HTML5 Boilerplate project](https://github.com/h5bp/html5-boilerplate) and it also takes advantage of the Blade template engine provided by Laravel.

The package contains the basic structure of the layout (skeleton structure) and blade files for you to start coding and adding your content. It DOES NOT contain any CSS Framework such as Bootstrap or JS library OTHER THAN some of the ones that are included with the HTML5 Boilerplate project.

Installation
------------
Require this package with composer.

```shell
composer require ven7ura/laravel-html5-boilerplate
```

Publish the contents of the package to your project.
```shell
php artisan vendor:publish --provider="Ven7ura\Html5Boilerplate\Html5BoilerplateServiceProvider"
```

Structure
---------
You will now have two new folders in the views folder, each with new files with unique purposes. The default structure and names are:

+ common
    + footer.blade.php
    + header.blade.php
    + navigation.blade.php
+ layout
    + body.blade.php
    + head.blade.php
    + master.blade.php
    + tail.blade.php

###Structure in detail

The **common** folder contains the files that are reusable throughout the template. You may of course remove any unnecessary files and be sure to remove the import at the *body.blade.php* file.

The **layout** folder contains the structure of the layout. These files rarely change.

+ *body.blade.php*: contains  all the structure of the `<body>` content.
+ *head.blade.php*: All metadata, title, description and importing of stylesheets are contained in this blade file.
+ *master.blade.php*: this is the file that should be extended with. All of the template is contained and imported by this file.
+ *tail.blade.php*: this file should be used to include javascript and other data right before the closing of the `</body>` tag.

Usage
-----

After publishing the files, there will be a file named `h5b.php` in your `config` folder. This file contains some configurations that can be used to bootstrap your application.

+ The `manifest` value is relative to the *public* folder. Once you have that file ready you can set the path OR set it to `false` to remove the loading of a manifest file.
+ `appleicon` has the same configuration as manifest in that is relative to the *public* folder and can be set to `false` if not used by your application.
+ You can set Google Analytics by setting the `ga` value to `true` and by setting your `ga_id`.
+ Modernizr and jQuery are used by default in HTML5 Boilerplate project, so they are included here. It's best if you compile and use the tools provided by laravel to have only one CSS  and JS files. These options are to bootstrap your application.


The `body.blade.php` file in the *layout* folder should only import the `common` files you are going to use. Simply remove unused ones.


Make sure that the `head.blade.php` file in the *layout* folder has the correct path to your compiled css file, and that the metadata such as title are correctly used.

To use the layout is simple:

```
@extends('layout.master')

@section('title', 'The title of the page')
@section('description', 'Description of the page')

@section('content')
  <p>Hello world! This is HTML5 Boilerplate.</p>
@stop
```

Advanced
--------

There are two sections that you can use to your advantage. One is in the `head.blade.php` file and the other is in the `tail.blade.php`.

In the `head.blade.php` you will find a section called `styles`. With the blade engine you can take advantage and include custom styles to specific pages in your app by using:

```
@section('styles')
    @parent

    <link rel="stylesheet" href="{{ asset('css/anotherfile.css') }}">

@endsection
```

The other section is in the `tail.blade.php` file and its called `scripts` section. This is also useful when you are loading a JS library or framework for certain parts of your application.

License
-------

Laravel HTML5 Boilerplate is licensed under The MIT License (MIT).
