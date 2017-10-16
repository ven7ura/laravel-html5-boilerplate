<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Manifest
    |--------------------------------------------------------------------------
    |
    | Set this value to the name of the file that contains
    | all manifest info of your application.
    |
    | This path is relative to the public folder.
    |
    */
    'manifest' => 'site.manifest',

    /*
    |--------------------------------------------------------------------------
    | Apple Icon
    |--------------------------------------------------------------------------
    |
    | Set this value to the name of the image that will be
    | used for apple-touch-icon. This path is realtive
    | to the public folder.
    |
    | Example: 'img/icon.png' or asset('img/icon.png')
    |
    */
    'appleicon' => 'icon.png',

    /*
    |--------------------------------------------------------------------------
    | Google Analitics
    |--------------------------------------------------------------------------
    |
    | Set this value to the site's ID of the analitics
    | service that Google provides.
    |
    | Example: 'UA-XXXXX-Y'
    |
    */
    'ga' => false,
    'ga_id' => 'UA-XXXXX-Y',

    /*
    |--------------------------------------------------------------------------
    | Modernizr
    |--------------------------------------------------------------------------
    |
    | Set these values to load the Modernizr library for HTML5
    | and CSS3.
    |
    | The versions can be found in: https://cdnjs.com/libraries/modernizr    |
    |
    */
    'modernizr' => true,
    'modernizr_version' => '2.8.3',

    /*
    |--------------------------------------------------------------------------
    | JQuery
    |--------------------------------------------------------------------------
    |
    | Set these values to load JQuery in your application. If you
    | load bootstrap, this library will be automatically loaded
    | even if you set to load jquery to FALSE.
    |
    | The versions and integrities can be found in: http://code.jquery.com
    |
    */
    'jquery' => true,
    'jquery_version' => '3.2.1',
    'jquery_integrity' => 'sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=',

];
