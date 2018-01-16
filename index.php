<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';

$f3 = Base::instance();

$f3->set('DEBUG', 3);

$f3->route('GET /page', function(){
    echo '<h1>Routing Demo</h1>';
});

$f3->run();