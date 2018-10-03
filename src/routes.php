<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Controllers\UsersController;

$app->get('/', function() {
   return 'Instruction for Mauris test task';
});

$app->get('/api/users', 'App\Controllers\UsersController:showAll');
