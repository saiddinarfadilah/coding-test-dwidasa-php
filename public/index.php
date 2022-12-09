<?php

require_once __DIR__ . "/../vendor/autoload.php";

use CodingTest\php\App\Router;
use CodingTest\php\Controller\WorkerController;


Router::add("GET","/worker", WorkerController::class, "index" );
Router::add("GET","/worker/add", WorkerController::class, "formAdd" );
Router::add("POST","/worker/add", WorkerController::class, "postAdd" );
Router::add("GET","/worker/edit", WorkerController::class, "formUpdate" );
Router::add("POST","/worker/edit", WorkerController::class, "postUpdate" );

Router::add("GET","/worker/delete", WorkerController::class, "destroy" );

Router::run();