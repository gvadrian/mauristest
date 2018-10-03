<?php

$container = $app->getContainer();

$container['App\Controllers\UsersController'] = function ($c) {
    return new App\Controllers\UsersController($c->get('em'));
};
