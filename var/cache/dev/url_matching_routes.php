<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/addons' => [[['_route' => 'app_addons', '_controller' => 'App\\Controller\\AddonsController::index'], null, null, null, false, false, null]],
        '/addons/create' => [[['_route' => 'create_addons', '_controller' => 'App\\Controller\\AddonsController::create'], null, null, null, false, false, null]],
        '/clients' => [[['_route' => 'app_clients', '_controller' => 'App\\Controller\\ClientsController::index'], null, null, null, false, false, null]],
        '/clients/create' => [[['_route' => 'create_clients', '_controller' => 'App\\Controller\\ClientsController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/promocodes' => [[['_route' => 'app_promo_codes', '_controller' => 'App\\Controller\\PromoCodesController::index'], null, null, null, false, false, null]],
        '/promocodes/create' => [[['_route' => 'create_promocodes', '_controller' => 'App\\Controller\\PromoCodesController::create'], null, null, null, false, false, null]],
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
                .'|/addons/(?'
                    .'|edit/([^/]++)(*:66)'
                    .'|delete/([^/]++)(*:88)'
                .')'
                .'|/promocodes/(?'
                    .'|edit/([^/]++)(*:124)'
                    .'|delete/([^/]++)(*:147)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:192)'
                .'|/subscriptions/(?'
                    .'|edit/([^/]++)(*:231)'
                    .'|delete/([^/]++)(*:254)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [[['_route' => 'edit_addons', '_controller' => 'App\\Controller\\AddonsController::update'], ['id'], null, null, false, true, null]],
        88 => [[['_route' => 'delete_addons', '_controller' => 'App\\Controller\\AddonsController::delete'], ['id'], null, null, false, true, null]],
        124 => [[['_route' => 'edit_promocodes', '_controller' => 'App\\Controller\\PromoCodesController::update'], ['id'], null, null, false, true, null]],
        147 => [[['_route' => 'delete_promocodes', '_controller' => 'App\\Controller\\PromoCodesController::delete'], ['id'], null, null, false, true, null]],
        192 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        231 => [[['_route' => 'edit_subscription', '_controller' => 'App\\Controller\\SubscriptionsController::update'], ['id'], null, null, false, true, null]],
        254 => [
            [['_route' => 'delete_subscription', '_controller' => 'App\\Controller\\SubscriptionsController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
