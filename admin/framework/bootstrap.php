<?php

use App\Framework\App;
use App\Framework\Database\{QueryBuilder, Connection};

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
