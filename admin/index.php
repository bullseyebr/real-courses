<?php

require 'vendor/autoload.php';
require 'framework/bootstrap.php';

use App\Framework\{Router, Request};

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());


include_once("app/routes.php");

include_once("lib/layout.php");
