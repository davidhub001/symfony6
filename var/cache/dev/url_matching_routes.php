<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'front_index', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil_index', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/tout-sur-la-peche' => [[['_route' => '1content_index', '_controller' => 'App\\Controller\\FrontController::content1'], null, null, null, false, false, null]],
        '/infos-nosy-be' => [[['_route' => '2content_index', '_controller' => 'App\\Controller\\FrontController::content2'], null, null, null, false, false, null]],
        '/peche-autour-de-nosy-be' => [[['_route' => '3content_index', '_controller' => 'App\\Controller\\FrontController::content3'], null, null, null, false, false, null]],
        '/jour-peche-mitsio' => [[['_route' => '4content_index', '_controller' => 'App\\Controller\\FrontController::content4'], null, null, null, false, false, null]],
        '/sejour-avec-hotel-peche-mitsio-8jours' => [[['_route' => '5content_index', '_controller' => 'App\\Controller\\FrontController::content5'], null, null, null, false, false, null]],
        '/sejour-avec-hotel-Nosy-Be-iles-et-activite-8-jours' => [[['_route' => '6content_index', '_controller' => 'App\\Controller\\FrontController::content6'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\FrontController::contact'], null, null, null, false, false, null]],
        '/admin-data-dev' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::login'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\AdminController::logout'], null, null, null, false, false, null]],
        '/api-data-dev' => [[['_route' => 'apidatadev', '_controller' => 'App\\Controller\\ApiController::updateimage'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
