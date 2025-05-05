<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('is_active_controller')) {
    function is_active_controller($controllerName, $activeClass = 'current-menu-item') {
        $currentController = class_basename(Route::current()->controller);
        return $currentController === $controllerName ? $activeClass : '';
    }
}