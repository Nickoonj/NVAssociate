<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/subscriptions' => [[['_route' => 'app_subscriptions', '_controller' => 'App\\Controller\\SubscriptionsController::index'], null, null, null, false, false, null]],
        '/subscriptions/create' => [[['_route' => 'create_subscriptions', '_controller' => 'App\\Controller\\SubscriptionsController::create'], null, null, null, false, false, null]],
        '/superadmin' => [[['_route' => 'app_superadmin', '_controller' => 'App\\Controller\\SuperadminController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:78)'
                .'|/subscriptions/(?'
                    .'|edit/([^/]++)(*:116)'
                    .'|delete/([^/]++)(*:139)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        116 => [[['_route' => 'edit_subscription', '_controller' => 'App\\Controller\\SubscriptionsController::update'], ['id'], null, null, false, true, null]],
        139 => [
            [['_route' => 'delete_subscription', '_controller' => 'App\\Controller\\SubscriptionsController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
