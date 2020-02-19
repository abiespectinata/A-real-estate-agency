<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/requests' => [[['_route' => 'requests', '_controller' => 'App\\Controller\\AdminController::requests'], null, null, null, false, false, null]],
        '/a/homes' => [[['_route' => 'adminHomes', '_controller' => 'App\\Controller\\AdminController::adminHomes'], null, null, null, false, false, null]],
        '/buy' => [[['_route' => 'buy', '_controller' => 'App\\Controller\\HomesController::buy'], null, null, null, false, false, null]],
        '/renting' => [[['_route' => 'renting', '_controller' => 'App\\Controller\\HomesController::renting'], null, null, null, false, false, null]],
        '/liked-homes' => [[['_route' => 'likedHomes', '_controller' => 'App\\Controller\\HomesController::likedHomes'], null, null, null, false, false, null]],
        '/like-dislike' => [[['_route' => 'likeDislike', '_controller' => 'App\\Controller\\HomesController::likeDislike'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\MainController::contact'], null, null, null, false, false, null]],
        '/mentionslegales' => [[['_route' => 'mentionslegales', '_controller' => 'App\\Controller\\MainController::mentionslegales'], null, null, null, false, false, null]],
        '/apropos' => [[['_route' => 'apropos', '_controller' => 'App\\Controller\\MainController::apropos'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search_homes', '_controller' => 'App\\Controller\\SearchController::homesSearch'], null, null, null, true, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/register-validate-email' => [[['_route' => 'register_validate_email', '_controller' => 'App\\Controller\\SecurityController::register_validate_email'], null, null, null, false, false, null]],
        '/password-forgotten' => [[['_route' => 'password_forgotten', '_controller' => 'App\\Controller\\SecurityController::password_forgotten'], null, null, null, false, false, null]],
        '/password-update' => [[['_route' => 'password_update', '_controller' => 'App\\Controller\\SecurityController::password_update'], null, null, null, false, false, null]],
        '/stat' => [[['_route' => 'stat', '_controller' => 'App\\Controller\\StatController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/a/(?'
                    .'|answer\\-request/([^/]++)(*:198)'
                    .'|usersprofils/([^/]++)(*:227)'
                    .'|home\\-crud/([^/]++)(*:254)'
                .')'
                .'|/home/([^/]++)(*:277)'
                .'|/interested/([^/]++)(*:305)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        198 => [[['_route' => 'answerRequest', '_controller' => 'App\\Controller\\AdminController::index'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'usersProfil', '_controller' => 'App\\Controller\\AdminController::usersProfils'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'homeCrud', '_controller' => 'App\\Controller\\HomesController::homeCrud'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomesController::home'], ['id'], null, null, false, true, null]],
        305 => [
            [['_route' => 'interested', '_controller' => 'App\\Controller\\HomesController::interested'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
