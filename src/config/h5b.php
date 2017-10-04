<?php

return [
    /**
     * Set your path to the manifest json file this
     * path is relative to the public foler.
     * eg. 'manifest.json' or asset('manifest.json')
     **/
    'manifest' => 'site.manifest',

    /**
     * Set the path to the apple-touch-icon image png
     * this path is relative to the public folder.
     * eg. 'img/icon.png' or asset('img/icon.png')
     **/
    'appleicon' => 'icon.png'

    /**
     * Add your site's ID Google Analitics
     * services to your application.
     **/
    'ga' => 'UA-XXXXX-Y'

    /**
     * NOTE -----------------------------------------------------------------
     * Below are config values that bootstrap your application and have as  |
     * many tools as possible and start working as soon as possible, but    |
     * Laravel has included libraries and packages such as webpack and      |
     * integration with CSS extensions that can make your application       |
     * have a better performance and create less overhead to the            |
     * HTTP requests by loading less files.                                 |
     *                                                                      |
     * To remove the usage of a library just COMMENT the line where you set |
     * the config value. The view checks if there is such a value and       |
     * if FALSE the loading will not occur.                                 |
     * ----------------------------------------------------------------------
     **/


    /**
     * Set the version of modernizr that will be
     * used in this application. This imports
     * the minified version of the library.
     * -- The versions can be found in: https://cdnjs.com/libraries/modernizr
     **/
    'modernizr' => '2.8.3'

    /**
     * Set the version of jquery that will be used
     * in this application. This imports the
     * minified version of the library.
     * -- The versions and integrity can be found in: https://code.jquery.com
     **/
    'jquery' => '3.2.1'
    'jqueryhash' => 'sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4='

];
