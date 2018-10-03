<?php

session_start();

// Instantiate the app

require '../src/bootstrap.php';

// Set up dependencies
require '../src/dependencies.php';

// Register middleware
require '../src/middleware.php';

// Register routes
require '../src/routes.php';

// Run app
$app->run();
