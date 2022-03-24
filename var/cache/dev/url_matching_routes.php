<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/candidate' => [[['_route' => 'app_candidate', '_controller' => 'App\\Controller\\CandidateController::index'], null, null, null, false, false, null]],
        '/crone' => [[['_route' => 'app_crone', '_controller' => 'App\\Controller\\CroneController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/project' => [[['_route' => 'app_project', '_controller' => 'App\\Controller\\ProjectController::create'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'project_log', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'project_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
        ],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/vote' => [[['_route' => 'app_vote', '_controller' => 'App\\Controller\\VoteController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'project_main_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/registerlink' => [[['_route' => 'project_registery', '_controller' => 'App\\Controller\\RegistrationController::registerlink'], null, null, null, false, false, null]],
        '/api_data' => [[['_route' => 'project_rech', '_controller' => 'App\\Controller\\ApiController::getData'], null, null, null, false, false, null]],
        '/creation_projet' => [[['_route' => 'project_create_project', '_controller' => 'App\\Controller\\ProjectController::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/register/(?'
                    .'|([^/]++)(*:28)'
                    .'|complete(*:43)'
                    .'|rapide(*:56)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:95)'
                    .'|wdt/([^/]++)(*:114)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:160)'
                            .'|router(*:174)'
                            .'|exception(?'
                                .'|(*:194)'
                                .'|\\.css(*:207)'
                            .')'
                        .')'
                        .'|(*:217)'
                    .')'
                .')'
                .'|/user/([^/]++)(*:241)'
                .'|/c(?'
                    .'|reation_projet_part2/([^/]++)(*:283)'
                    .'|onfirmaion/([^/]++)(*:310)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], ['type'], null, null, false, true, null]],
        43 => [[['_route' => 'project_regist_makers', '_controller' => 'App\\Controller\\RegistrationController::register'], [], null, null, false, false, null]],
        56 => [[['_route' => 'project_regist_votant', '_controller' => 'App\\Controller\\RegistrationController::register'], [], null, null, false, false, null]],
        95 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        114 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        160 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        174 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        194 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        207 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        217 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        241 => [[['_route' => 'project_user', '_controller' => 'App\\Controller\\UserController::show'], ['idUser'], null, null, false, true, null]],
        283 => [[['_route' => 'project_create_project_middle', '_controller' => 'App\\Controller\\ProjectController::create2'], ['idProject'], null, null, false, true, null]],
        310 => [
            [['_route' => 'project_project_confirmation', '_controller' => 'App\\Controller\\ProjectController::Confirmation'], ['idProject'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
