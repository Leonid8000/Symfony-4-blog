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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\AdminController::showUsers'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/admin/category/create' => [[['_route' => 'category/create', '_controller' => 'App\\Controller\\CategoryController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/admin/posts' => [[['_route' => 'posts', '_controller' => 'App\\Controller\\PostController::index'], null, null, null, false, false, null]],
        '/admin/post/create' => [[['_route' => 'create/post', '_controller' => 'App\\Controller\\PostController::create'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/admin/tag/index' => [[['_route' => 'tags', '_controller' => 'App\\Controller\\TagController::index'], null, null, null, false, false, null]],
        '/admin/tag/create' => [[['_route' => 'tag/create', '_controller' => 'App\\Controller\\TagController::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|category/(?'
                        .'|delete/([^/]++)(*:206)'
                        .'|edit/([^/]++)(*:227)'
                    .')'
                    .'|post/(?'
                        .'|delete/([^/]++)(*:259)'
                        .'|edit/([^/]++)(*:280)'
                    .')'
                    .'|tag/(?'
                        .'|delete/([^/]++)(*:311)'
                        .'|edit/([^/]++)(*:332)'
                    .')'
                .')'
                .'|/main/show(?'
                    .'|Post/([^/]++)(*:368)'
                    .'|\\-(?'
                        .'|category/([^/]++)(*:398)'
                        .'|tag/([^/]++)(*:418)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'category/delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'category/edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], null, null, false, true, null]],
        259 => [[['_route' => 'post/delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], null, null, false, true, null]],
        280 => [[['_route' => 'admin/post/edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], null, null, false, true, null]],
        311 => [[['_route' => 'tag/delete', '_controller' => 'App\\Controller\\TagController::delete'], ['id'], null, null, false, true, null]],
        332 => [[['_route' => 'tag/edit', '_controller' => 'App\\Controller\\TagController::edit'], ['id'], null, null, false, true, null]],
        368 => [[['_route' => 'post/show', '_controller' => 'App\\Controller\\MainController::show'], ['slug'], null, null, false, true, null]],
        398 => [[['_route' => 'category/show', '_controller' => 'App\\Controller\\MainController::showCategoryPosts'], ['slug'], null, null, false, true, null]],
        418 => [
            [['_route' => 'tag/show', '_controller' => 'App\\Controller\\MainController::showTagPosts'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
