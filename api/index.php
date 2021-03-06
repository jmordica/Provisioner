<?php

/*
    This is the entry point for the APIs
*/

define(DB_SERVER, 'http://166.78.18.180');
define(DB_PORT, '5984');

require_once 'wrapper/bigcouch.php';
require_once 'utils_validator.php';
require_once 'lib/restler/restler.php';
use Luracast\Restler\Restler;

$r = new Restler();
$r->addAPIClass('phones');
$r->addAPIClass('providers');
$r->addAPIClass('accounts');
$r->addAuthenticationClass('AccessControl');
$r->handle();

?>
