<?php

require __DIR__.'/../vendor/autoload.php';

session_start();

//destruction desdonnées de la session
session_unset();
session_destroy();

header('LOCATION: index.php', true, 302);
exit();
