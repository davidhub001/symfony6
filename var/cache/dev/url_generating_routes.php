<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'front_index' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/']], [], [], []],
    'accueil_index' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/accueil']], [], [], []],
    '1content_index' => [[], ['_controller' => 'App\\Controller\\FrontController::content1'], [], [['text', '/tout-sur-la-peche']], [], [], []],
    '2content_index' => [[], ['_controller' => 'App\\Controller\\FrontController::content2'], [], [['text', '/infos-nosy-be']], [], [], []],
    '3content_index' => [[], ['_controller' => 'App\\Controller\\FrontController::content3'], [], [['text', '/peche-autour-de-nosy-be']], [], [], []],
    '4content_index' => [[], ['_controller' => 'App\\Controller\\FrontController::content4'], [], [['text', '/peche-jour-mitsio']], [], [], []],
    '5content_index' => [[], ['_controller' => 'App\\Controller\\FrontController::content5'], [], [['text', '/sejour-avec-hotel-peche-mitsio-8jours']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\FrontController::contact'], [], [['text', '/contact']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::login'], [], [['text', '/admin-data-dev']], [], [], []],
    'dashboard' => [[], ['_controller' => 'App\\Controller\\AdminController::dashboard'], [], [['text', '/dashboard']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\AdminController::logout'], [], [['text', '/logout']], [], [], []],
    'apidatadev' => [[], ['_controller' => 'App\\Controller\\ApiController::updateimage'], [], [['text', '/api-data-dev']], [], [], []],
];
