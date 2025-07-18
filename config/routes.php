<?php

use Core\Route;

use App\Controllers\IndexController;

use App\Controllers\LoginController;

use App\Controllers\DashboardController;

use App\Controllers\LogoutController;

use App\Controllers\RegisterController;

(new Route())

->get('/', IndexController::class)

->get('/login', [LoginController::class, 'index'])
->post('/login', [LoginController::class, 'login'])

->get('/dashboard', DashboardController::class)

->get('/logout', LogoutController::class)

->get('/registrar', [RegisterController::class, 'index'])
->post('/registrar', [RegisterController::class, 'register'])

->run();

// $password = '12345678*';
// $hash = password_hash($password, PASSWORD_BCRYPT);
// echo $hash;