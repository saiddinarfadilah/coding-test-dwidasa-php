<?php

require_once __DIR__ . "/../vendor/autoload.php";

use CodingTest\php\App\Router;
use CodingTest\php\Controller\WorkerController;


Router::add("GET","/worker", WorkerController::class, "index" );
Router::add("GET","/worker/add", WorkerController::class, "formAdd" );
Router::add("POST","/worker/add", WorkerController::class, "postAdd" );

Router::run();