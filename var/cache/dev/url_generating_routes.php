<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_addons' => [[], ['_controller' => 'App\\Controller\\AddonsController::index'], [], [['text', '/addons']], [], [], []],
    'create_addons' => [[], ['_controller' => 'App\\Controller\\AddonsController::create'], [], [['text', '/addons/create']], [], [], []],
    'edit_addons' => [['id'], ['_controller' => 'App\\Controller\\AddonsController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/addons/edit']], [], [], []],
    'delete_addons' => [['id'], ['_controller' => 'App\\Controller\\AddonsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/addons/delete']], [], [], []],
    'app_clients' => [[], ['_controller' => 'App\\Controller\\ClientsController::index'], [], [['text', '/clients']], [], [], []],
    'create_clients' => [[], ['_controller' => 'App\\Controller\\ClientsController::create'], [], [['text', '/clients/create']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'app_promo_codes' => [[], ['_controller' => 'App\\Controller\\PromoCodesController::index'], [], [['text', '/promocodes']], [], [], []],
    'create_promocodes' => [[], ['_controller' => 'App\\Controller\\PromoCodesController::create'], [], [['text', '/promocodes/create']], [], [], []],
    'edit_promocodes' => [['id'], ['_controller' => 'App\\Controller\\PromoCodesController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promocodes/edit']], [], [], []],
    'delete_promocodes' => [['id'], ['_controller' => 'App\\Controller\\PromoCodesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promocodes/delete']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_subscriptions' => [[], ['_controller' => 'App\\Controller\\SubscriptionsController::index'], [], [['text', '/subscriptions']], [], [], []],
    'create_subscriptions' => [[], ['_controller' => 'App\\Controller\\SubscriptionsController::create'], [], [['text', '/subscriptions/create']], [], [], []],
    'edit_subscription' => [['id'], ['_controller' => 'App\\Controller\\SubscriptionsController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/subscriptions/edit']], [], [], []],
    'delete_subscription' => [['id'], ['_controller' => 'App\\Controller\\SubscriptionsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/subscriptions/delete']], [], [], []],
    'app_superadmin' => [[], ['_controller' => 'App\\Controller\\SuperadminController::index'], [], [['text', '/superadmin']], [], [], []],
];
