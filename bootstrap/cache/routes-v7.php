<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UJ0B2CxMVcTzTUGR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::34kGS8yjMSFoorsD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/runfinacron' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J6RT593mepGqccr4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qStvZEqgb0DBVVsX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eM0r9FPVyZR2Fbpj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bmindteaminvest' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bmindteaminvest',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WGf9VLjEdyZGdIsq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'registration',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RIOLtI8DK1mtQqTc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check-duplicate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'checkDuplicate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/add-fund-elite/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'money-store-elite',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/join-elite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'join-elite',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/career1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'career',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eJpVmKUCv8xOQJZ5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/buy_package-bonus/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buy-package-bonus',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/coupon-store/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store-coupon',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/validate-coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'validate-coupon',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/buy_bmind/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buy-bmindnew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/bmind/update-daily-bonus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bmindDailyBonusUpdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dailybonus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XRYOTdge61N4BOjf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/update-profile/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-profile',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/user-password/change-password-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'change-password-store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/user-wallet/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-wallet-add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/user-wallet/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-wallet-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/add-money-auto' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'metamask.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/withdraw-usd-confirmation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdraw-usd-confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/withdraw-usd-cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdraw-usd-cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/withdraw-bonus-confirmation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdraw-bonus-confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/withdraw-bonus-cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdraw-mind-cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/buy_token/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buy-token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/sell_token/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sell-token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/add-fund/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'money-store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/add-fund/manually/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'money-store-manual',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/get-sponsor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get-sponsor',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/get-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get-users',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general-settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-general-settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-payment-type',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-type/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-type-store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-type/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-type-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-way' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-payment-way',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-way/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-way-store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-way/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment-way-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-account-info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account-info/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account-info-store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account-info/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account-info-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add-deposit-usd/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposit-elite',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add-money/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposit-manage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdraw-manage1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw-approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'musd-withdraw-approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/usd-withdraw/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usd-withdraw-manage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/usd-withdraw-approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usd-withdraw-approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw-bonus/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdraw-bonus-manage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw-bonus-approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdraw-bonus-approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/token-rate/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'token-rate-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ambassador/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ambassador-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transfer-info/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer-info-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/topbar-info/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'topbar-info-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/withdraw-info/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdraw-info-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/usdt-withdraw-info/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usdt-withdraw-info-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/company-info/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/token_settings/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tokens-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/level_settings/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-level-settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/staking_settings/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-staking-settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/musdstaking_settings/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-musdstaking-settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/merchant_settings/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-merchant-settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/elite_settings/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-elite-settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner_settings/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banner-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user-lists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-user-lists',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/all-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'all-users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/all-kyc-lists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'all_kyc_lists',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search_user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ambassador-lists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-ambassador-lists',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/merchant-lists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-merchant-lists',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/consultant-lists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-consultant-lists',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/elite-member-lists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-elite-member-lists',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/consultant/add-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-consultant-store',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user-password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reset-password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cupon-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cupon_settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cupon-settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cupon-settings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cupon-settings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add-money/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-add-money',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add-money-usdt/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-add-money-usdt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add-money/token/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-add-money-token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add-money/bonus/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-add-money-bonus',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ambassador/add-money/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-add-ambassador-money',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ambassador/add-token/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-add-ambassador-token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/community-token-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-community-token-list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/community-token/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store-community-token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/base-mind-stage-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'baseMindStageList',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bmind-stage/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeBmindStage',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bmind-stage/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateBmindStage',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bmind-user-target-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-target-lists',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bmind-target-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-target-store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/base-mind-package-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'baseMindPacakgeSettings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/base-mind-package-add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'baseMindPacakgeAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bmind-package/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateBmindPackage',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/packages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-packages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/packages/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store-package',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/packages/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-package',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-ambassador' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make-ambassador',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/make-consultant' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'make-consultant',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/remove-consultant' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'remove-consultant',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user-restrict' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-restrict',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user-unrestrict' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-unrestrict',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transaction-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-transaction-report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/kyc-verifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kyc-verification',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/add-mind/manually/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'token-store-manual',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add-token/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposit-token-manage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send-bonus-confirmation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send-bonus-confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send-usdt-confirmation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usdt-send-confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send-fund-confirmation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send-fund-confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/withdraw-fund-confirmation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdraw-fund-confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/withdraw-fund-cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'musd-withdraw-cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/compose-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.compose.email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/send-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.send.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ckeditor/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ckeditor.image-upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cashwallet-transaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cash-wallet-transaction',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bonuswallet-transaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bonus-wallet-transaction',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tokenwallet-transaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'token-wallet-transaction',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/user-redeem' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_cupon.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/password/reset/([^/]++)(*:31)|/home/(?|w(?|allet/([^/]++)(*:65)|ithdraw(?|/(?|([^/]++)(*:94)|store(*:106))|\\-(?|usd/(?|([^/]++)(*:135)|store(*:148))|bonus/(?|([^/]++)(*:174)|store(*:187))|history/([^/]++)(*:212))))|elite(?|_club/([^/]++)(*:245)|\\-(?|sponsor\\-bonus\\-history/([^/]++)(*:290)|deposit\\-history/([^/]++)(*:323)))|co(?|ntact_us/([^/]++)(*:355)|upon/([^/]++)(*:376)|mmunity_token/([^/]++)(*:406))|b(?|uy(?|_(?|staking/(?|([^/]++)(*:447)|store(*:460))|mstaking/(?|([^/]++)(*:489)|store(*:502))|package/(?|([^/]++)(*:530)|store(*:543)))|\\-bmind/([^/]++)(*:569))|ecome\\-merchant/(?|([^/]++)(*:605)|save(*:617))|mind\\-(?|s(?|taking\\-history/([^/]++)(*:663)|ponsor\\-bonus\\-history/([^/]++)(*:702))|daily\\-bonus\\-history/([^/]++)(*:741)|level\\-bonus\\-history/([^/]++)(*:779)))|t(?|rans(?|actions/([^/]++)(*:816)|fer\\-history/([^/]++)(*:845))|oken\\-settlement\\-bonus\\-history/([^/]++)(*:895))|us(?|er\\-(?|p(?|rofile/([^/]++)(*:935)|ayment\\-method/(?|([^/]++)(*:969)|store(*:982)|update(*:996)))|wallet\\-settings/([^/]++)(*:1031)|redeem/redeem/([^/]++)(*:1062))|d\\-staking\\-bonus\\-history/([^/]++)(*:1107))|m(?|y(?|_asset/([^/]++)(*:1140)|\\-affilate/([^/]++)(*:1168))|staking\\-history/([^/]++)(*:1203))|s(?|taking\\-(?|history/([^/]++)(*:1244)|bonus\\-history/([^/]++)(*:1276))|end\\-(?|bonus/(?|([^/]++)(*:1311)|store(*:1325))|usdt/(?|([^/]++)(*:1351)|store(*:1365))))|fund\\-transfer/(?|([^/]++)(*:1403)|store(*:1417))|a(?|dd\\-(?|fund/([^/]++)(*:1451)|affilate/(?|([^/]++)(*:1480)|store(*:1494))|mind/([^/]++)(*:1517))|pprove_fund/([^/]++)/([^/]++)(*:1556)|ffilate\\-bonus\\-history/([^/]++)(*:1597))|kyc\\-verification(?|/(?|([^/]++)(*:1639)|store(*:1653)|approve(*:1669))|s/reject/([^/]++)(*:1696))|refferer\\-bonus\\-history/([^/]++)(*:1739)|daily\\-bonus\\-history/([^/]++)(*:1778)|level\\-bonus\\-history/([^/]++)(*:1817)|other\\-transaction\\-history/([^/]++)(*:1862))|/a(?|dmin/(?|pa(?|yment\\-(?|type/delete/([^/]++)(*:1920)|way/delete/([^/]++)(*:1948))|ckages/(?|delete/([^/]++)(*:1983)|edit/([^/]++)(*:2005)))|a(?|ccount\\-info/delete/([^/]++)(*:2048)|dd\\-(?|usd\\-approve/usd/([^/]++)(*:2089)|money\\-(?|reject(?|ed/(?|usd/([^/]++)(*:2135)|([^/]++)(*:2152))|/([^/]++)/([^/]++)/([^/]++)(*:2189))|approve/([^/]++)(*:2215))|token\\-(?|approve/([^/]++)(*:2251)|reject(?|/([^/]++)/([^/]++)/([^/]++)(*:2296)|ed/([^/]++)(*:2316)))))|withdraw\\-(?|reject/([^/]++)/([^/]++)/([^/]++)(*:2375)|bonus\\-reject/([^/]++)/([^/]++)/([^/]++)(*:2424))|usd\\-withdraw\\-reject/([^/]++)/([^/]++)/([^/]++)(*:2482)|cupon\\-settings/(?|([^/]++)(?|(*:2521)|/edit(*:2535)|(*:2544))|newcupon(*:2562)|store(*:2576))|bmind(?|stage/edit/([^/]++)(*:2613)|\\-package/edit/([^/]++)(*:2645))|get\\-(?|user\\-(?|id/([^/]++)(*:2683)|ajax/([^/]++)(*:2705))|profile/([^/]++)(*:2731)))|ccount/verify/([^/]++)(*:2764))|/user\\-verification\\-email/([^/]++)(*:2809))/?$}sDu',
    ),
    3 => 
    array (
      31 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      65 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallet',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      94 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q662DLa7VNr6WEbj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdraw-store',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdrawUSD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdrawUsdStore',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6hoDurNlBkpXtVob',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'withdrawbonus-store',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RRadDlwsI02qCr1X',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'elite-club',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SNpMBjVI16R8OMt6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8i1F0IRlY6XKEFfB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      355 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gTMnle1kNqtJ8jXn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8v7QWpb425RoaT3F',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buy_community_token',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t0bwOdY6ByV3uznm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buy-staking',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      489 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rchgt0pQcROP9ZhW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buy-mstaking',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IK3hxF66QOQ02Wm0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      543 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buy-package',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IC8KyIo4On1aerkj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lfDvNXOXkiaCDFJ7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store-merchant',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RPofloXRKfJYKaAt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      702 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SYNlAxpgJhaxFBp7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MV7SuASsf3P32MUd',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      779 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oCVB68ufhsxv0cRG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xVYGOndcmqecwOkh',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HFlkWmJxwUSrHcV9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n2mGuiDSkNZHJzDa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      935 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FYczWnAey5KcdhmK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      969 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0IOx6r8wUdAVTiCN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      982 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-payment-method',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-payment-method-update',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1031 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7XRhznV5BqXtwsIa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1062 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_cupon.redeem',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gGy1t6yUaAIjZGZE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yfPX70SqZJ2cQ8ak',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'affilates',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1203 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CjHDZWppDx8AUcXx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ISTt0YKlbngyTg7n',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d2jMiz8xcoxg4pjA',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qew29iMU88Yrjvz8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send-bonus',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CkaONPy9ZiorhzuK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send-usdt',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1403 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lAgQtSyV5mxhlQoF',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fund-transfer',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add-money',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1480 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dNTK94yLXbb9ii7y',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'affilate-add',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1517 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zsx4JKgk0JcRsjNy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lvcKpixJJ1jZ6gVa',
          ),
          1 => 
          array (
            0 => 'amount',
            1 => 'description',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KbTpUOb4mHTT1H6L',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z3q7zowVnHSuHyh9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1653 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kyc-store',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kyc-approve',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1696 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1mgTfvp8f9VDzOBC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1739 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EAYxJP8nOAMlseri',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1778 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dBQqUHGtTvsM9zYm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::64DtufiYlQpYzNBI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O3UH7qxAdsb6WQti',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ErXlrVtmnjaB96My',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1948 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1hR6vO0DQjlCJ41b',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uXuxcinv0CkiWqxa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dp70UivN72SYYaHJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w5ryxnAJiz6SNVJz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2089 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f87CvRjpQ1wKrXgE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HrREBOTJ2zYFpz1p',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Cjok7N5rqxkk4GQ8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2189 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RVWFvbqS0QuIo1rk',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'user_id',
            2 => 'amount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rRMZkAhnIJoocDeO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::us0uz9uIjYKY7rxQ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JYTA03d0qdEmrOO3',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'user_id',
            2 => 'amount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wCPeNOgbaVwIuH02',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fcjg7CvgF7XxlIo7',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'user_id',
            2 => 'amount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PfqcaegbI9Md5M6F',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'user_id',
            2 => 'amount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2482 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7orX3FeTNrrkDaEi',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'user_id',
            2 => 'amount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cupon-settings.show',
          ),
          1 => 
          array (
            0 => 'cupon_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2535 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cupon-settings.edit',
          ),
          1 => 
          array (
            0 => 'cupon_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cupon-settings.update',
          ),
          1 => 
          array (
            0 => 'cupon_setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cupon-settings.destroy',
          ),
          1 => 
          array (
            0 => 'cupon_setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2562 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cupon-settings.index',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cupon_settings_store',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2613 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nbUc6wHTkd1yLm1E',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2645 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xDjgK5q7PZv7aThM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2683 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FCUAqFU5AEg4C3uX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2705 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_ajax',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CEDdf7qjzA58IQ9o',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2764 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.verify',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email-verification',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::UJ0B2CxMVcTzTUGR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::UJ0B2CxMVcTzTUGR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::34kGS8yjMSFoorsD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000092c0000000000000000";}";s:4:"hash";s:44:"3nOcLCzSUtlk+4nBAK5vRx9iJzVg8bdVFEpQ9cTFRYA=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::34kGS8yjMSFoorsD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J6RT593mepGqccr4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'runfinacron',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:313:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:95:"function() {
    $exitCode = \\Artisan::call(\'Bonus:daily\');
    return \'Cron Run Success\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000092e0000000000000000";}";s:4:"hash";s:44:"RanJsywJnFPFJfKwJEJqbw08XLrmePrSyOraD0VSP1s=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::J6RT593mepGqccr4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qStvZEqgb0DBVVsX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:267:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:49:"function () {
    return \\view(\'auth.login\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009300000000000000000";}";s:4:"hash";s:44:"xTo6ApVM9DhdVbN7kRFct9TMT9ixjjSKf3wAB+Ibnfg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qStvZEqgb0DBVVsX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eM0r9FPVyZR2Fbpj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:270:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:52:"function () {
    return \\view(\'auth.register\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009320000000000000000";}";s:4:"hash";s:44:"3xZulqDmXQkvyT7nFIgpxCw1MnPOb8zXPE8NStxohK8=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eM0r9FPVyZR2Fbpj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bmindteaminvest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bmindteaminvest',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@bmindteaminvest',
        'controller' => 'App\\Http\\Controllers\\FrontendController@bmindteaminvest',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bmindteaminvest',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WGf9VLjEdyZGdIsq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WGf9VLjEdyZGdIsq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:351:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:132:"function (\\Request $request) {
    
            
  \\Auth::logout();
 
        return \\Redirect::route(\'login\');
    

   
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009ff0000000000000000";}";s:4:"hash";s:44:"ztATKEsD4ZEAe93wiePQ9A5D5TkGn+7wvFcGnSq1NPY=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'registration' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@registration',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@registration',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'registration',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RIOLtI8DK1mtQqTc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RIOLtI8DK1mtQqTc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'checkDuplicate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'check-duplicate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@checkDuplicate',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@checkDuplicate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'checkDuplicate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/wallet/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@wallet12',
        'controller' => 'App\\Http\\Controllers\\FrontendController@wallet12',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'elite-club' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/elite_club/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@elite_club',
        'controller' => 'App\\Http\\Controllers\\FrontendController@elite_club',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'elite-club',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'money-store-elite' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/add-fund-elite/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\PreventDuplicate',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@StoreUSD',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@StoreUSD',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'money-store-elite',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'join-elite' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/join-elite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@joinElite',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@joinElite',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'join-elite',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'career' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'career1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:275:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:57:"function () {
    return \\view(\'user.pages.career1\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009440000000000000000";}";s:4:"hash";s:44:"8hlHmXCL06ExNiL2jpkkbhQJVw2CjB0FKcrP8vBsVRc=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'career',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@index',
        'controller' => 'App\\Http\\Controllers\\FrontendController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gTMnle1kNqtJ8jXn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/contact_us/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@ContactUs',
        'controller' => 'App\\Http\\Controllers\\FrontendController@ContactUs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gTMnle1kNqtJ8jXn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eJpVmKUCv8xOQJZ5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@storeContact',
        'controller' => 'App\\Http\\Controllers\\FrontendController@storeContact',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eJpVmKUCv8xOQJZ5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t0bwOdY6ByV3uznm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/buy_staking/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@buy_staking',
        'controller' => 'App\\Http\\Controllers\\FrontendController@buy_staking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::t0bwOdY6ByV3uznm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buy-staking' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/buy_staking/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@store_staking',
        'controller' => 'App\\Http\\Controllers\\FrontendController@store_staking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'buy-staking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rchgt0pQcROP9ZhW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/buy_mstaking/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@buy_mstaking',
        'controller' => 'App\\Http\\Controllers\\FrontendController@buy_mstaking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rchgt0pQcROP9ZhW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buy-mstaking' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/buy_mstaking/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@store_mstaking',
        'controller' => 'App\\Http\\Controllers\\FrontendController@store_mstaking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'buy-mstaking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IK3hxF66QOQ02Wm0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/buy_package/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@buy_package',
        'controller' => 'App\\Http\\Controllers\\FrontendController@buy_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IK3hxF66QOQ02Wm0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buy-package' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/buy_package/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@store_package',
        'controller' => 'App\\Http\\Controllers\\FrontendController@store_package',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'buy-package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buy-package-bonus' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/buy_package-bonus/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@store_package_bonus',
        'controller' => 'App\\Http\\Controllers\\FrontendController@store_package_bonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'buy-package-bonus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lfDvNXOXkiaCDFJ7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/become-merchant/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@become_merchant',
        'controller' => 'App\\Http\\Controllers\\FrontendController@become_merchant',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lfDvNXOXkiaCDFJ7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store-merchant' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/become-merchant/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@become_merchant_save',
        'controller' => 'App\\Http\\Controllers\\FrontendController@become_merchant_save',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store-merchant',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8v7QWpb425RoaT3F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/coupon/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@coupon',
        'controller' => 'App\\Http\\Controllers\\FrontendController@coupon',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8v7QWpb425RoaT3F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store-coupon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/coupon-store/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@coupon_store',
        'controller' => 'App\\Http\\Controllers\\FrontendController@coupon_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store-coupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'validate-coupon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'validate-coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@validateCoupon',
        'controller' => 'App\\Http\\Controllers\\FrontendController@validateCoupon',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'validate-coupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buy_community_token' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/community_token/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@buy_community_token',
        'controller' => 'App\\Http\\Controllers\\FrontendController@buy_community_token',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'buy_community_token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buy-bmindnew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/buy_bmind/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\PreventDuplicate',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@store_bmind',
        'controller' => 'App\\Http\\Controllers\\FrontendController@store_bmind',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'buy-bmindnew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IC8KyIo4On1aerkj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/buy-bmind/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@bmindStages',
        'controller' => 'App\\Http\\Controllers\\FrontendController@bmindStages',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IC8KyIo4On1aerkj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bmindDailyBonusUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/bmind/update-daily-bonus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@bmindDailyBonusUpdate',
        'controller' => 'App\\Http\\Controllers\\FrontendController@bmindDailyBonusUpdate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bmindDailyBonusUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RPofloXRKfJYKaAt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/bmind-staking-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@bmind_staking_history',
        'controller' => 'App\\Http\\Controllers\\FrontendController@bmind_staking_history',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RPofloXRKfJYKaAt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SYNlAxpgJhaxFBp7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/bmind-sponsor-bonus-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@bmindSponsorBonus',
        'controller' => 'App\\Http\\Controllers\\FrontendController@bmindSponsorBonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SYNlAxpgJhaxFBp7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MV7SuASsf3P32MUd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/bmind-daily-bonus-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@BmindStakingBonus',
        'controller' => 'App\\Http\\Controllers\\FrontendController@BmindStakingBonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MV7SuASsf3P32MUd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oCVB68ufhsxv0cRG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/bmind-level-bonus-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@bmindLevelBonus',
        'controller' => 'App\\Http\\Controllers\\FrontendController@bmindLevelBonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oCVB68ufhsxv0cRG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XRYOTdge61N4BOjf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dailybonus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@dailybonus1',
        'controller' => 'App\\Http\\Controllers\\FrontendController@dailybonus1',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XRYOTdge61N4BOjf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xVYGOndcmqecwOkh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/transactions/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@manage_transaction',
        'controller' => 'App\\Http\\Controllers\\FrontendController@manage_transaction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xVYGOndcmqecwOkh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FYczWnAey5KcdhmK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/user-profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@profile',
        'controller' => 'App\\Http\\Controllers\\ProfileController@profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FYczWnAey5KcdhmK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-profile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/update-profile/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@UpdateProfile',
        'controller' => 'App\\Http\\Controllers\\ProfileController@UpdateProfile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'change-password-store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/user-password/change-password-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@changePassStore',
        'controller' => 'App\\Http\\Controllers\\ProfileController@changePassStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'change-password-store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yfPX70SqZJ2cQ8ak' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/my_asset/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@my_asset',
        'controller' => 'App\\Http\\Controllers\\FrontendController@my_asset',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yfPX70SqZJ2cQ8ak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ISTt0YKlbngyTg7n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/staking-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@my_asset_staking',
        'controller' => 'App\\Http\\Controllers\\FrontendController@my_asset_staking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ISTt0YKlbngyTg7n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CjHDZWppDx8AUcXx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/mstaking-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@my_asset_mstaking',
        'controller' => 'App\\Http\\Controllers\\FrontendController@my_asset_mstaking',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CjHDZWppDx8AUcXx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0IOx6r8wUdAVTiCN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/user-payment-method/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserPaymentController@index',
        'controller' => 'App\\Http\\Controllers\\UserPaymentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0IOx6r8wUdAVTiCN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7XRhznV5BqXtwsIa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/user-wallet-settings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserPaymentController@wallet',
        'controller' => 'App\\Http\\Controllers\\UserPaymentController@wallet',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7XRhznV5BqXtwsIa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-payment-method' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/user-payment-method/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserPaymentController@store',
        'controller' => 'App\\Http\\Controllers\\UserPaymentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-payment-method',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-payment-method-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/user-payment-method/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserPaymentController@update',
        'controller' => 'App\\Http\\Controllers\\UserPaymentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-payment-method-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-wallet-add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/user-wallet/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserPaymentController@storeWallet',
        'controller' => 'App\\Http\\Controllers\\UserPaymentController@storeWallet',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-wallet-add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-wallet-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/user-wallet/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UserPaymentController@updateWallet',
        'controller' => 'App\\Http\\Controllers\\UserPaymentController@updateWallet',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-wallet-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'metamask.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/add-money-auto',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@create',
        'controller' => 'App\\Http\\Controllers\\PaymentController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'metamask.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q662DLa7VNr6WEbj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/withdraw/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@withdraw_manage',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@withdraw_manage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Q662DLa7VNr6WEbj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdraw-store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/withdraw/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@withdraw_store',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@withdraw_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'withdraw-store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdrawUSD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/withdraw-usd/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@withdrawUSD',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@withdrawUSD',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'withdrawUSD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdrawUsdStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/withdraw-usd/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@withdrawUsdStore',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@withdrawUsdStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'withdrawUsdStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdraw-usd-confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'withdraw-usd-confirmation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@withdrawUsdconfirmation',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@withdrawUsdconfirmation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'withdraw-usd-confirmation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdraw-usd-cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'withdraw-usd-cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@withdrawUsdcancel',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@withdrawUsdcancel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'withdraw-usd-cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6hoDurNlBkpXtVob' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/withdraw-bonus/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@withdrawbonus_manage',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@withdrawbonus_manage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6hoDurNlBkpXtVob',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdrawbonus-store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/withdraw-bonus/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\PreventDuplicate',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@withdrawbonus_store',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@withdrawbonus_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'withdrawbonus-store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdraw-bonus-confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'withdraw-bonus-confirmation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\PreventDuplicate',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@withdrawconfirmation',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@withdrawconfirmation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'withdraw-bonus-confirmation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdraw-mind-cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'withdraw-bonus-cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\PreventDuplicate',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@withdrawMindCancel',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@withdrawMindCancel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'withdraw-mind-cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lAgQtSyV5mxhlQoF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/fund-transfer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@fund_transfer',
        'controller' => 'App\\Http\\Controllers\\FrontendController@fund_transfer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lAgQtSyV5mxhlQoF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fund-transfer' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/fund-transfer/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@fund_transfer_store',
        'controller' => 'App\\Http\\Controllers\\FrontendController@fund_transfer_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fund-transfer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qew29iMU88Yrjvz8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/send-bonus/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@send_bonus',
        'controller' => 'App\\Http\\Controllers\\FrontendController@send_bonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Qew29iMU88Yrjvz8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CkaONPy9ZiorhzuK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/send-usdt/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@send_usdt',
        'controller' => 'App\\Http\\Controllers\\FrontendController@send_usdt',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CkaONPy9ZiorhzuK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send-bonus' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/send-bonus/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@send_bonus_store',
        'controller' => 'App\\Http\\Controllers\\FrontendController@send_bonus_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send-bonus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send-usdt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/send-usdt/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@send_usdt_store',
        'controller' => 'App\\Http\\Controllers\\FrontendController@send_usdt_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send-usdt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buy-token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/buy_token/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@store_buy_token',
        'controller' => 'App\\Http\\Controllers\\FrontendController@store_buy_token',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'buy-token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sell-token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/sell_token/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@store_sell_token',
        'controller' => 'App\\Http\\Controllers\\FrontendController@store_sell_token',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sell-token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add-money' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/add-fund/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@index',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add-money',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lvcKpixJJ1jZ6gVa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/approve_fund/{amount}/{description}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@approveFund',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@approveFund',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lvcKpixJJ1jZ6gVa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'money-store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/add-fund/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@Store',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@Store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'money-store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'money-store-manual' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/add-fund/manually/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@StoreManual',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@StoreManual',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'money-store-manual',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@adminHome',
        'controller' => 'App\\Http\\Controllers\\HomeController@adminHome',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get-sponsor' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/get-sponsor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@getSponsor',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@getSponsor',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get-sponsor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get-users' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/get-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@getUser',
        'controller' => 'App\\Http\\Controllers\\HomeController@getUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get-users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'affilates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/my-affilate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AffilateController@index',
        'controller' => 'App\\Http\\Controllers\\AffilateController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'affilates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dNTK94yLXbb9ii7y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/add-affilate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AffilateController@add_affilate',
        'controller' => 'App\\Http\\Controllers\\AffilateController@add_affilate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dNTK94yLXbb9ii7y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'affilate-add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/add-affilate/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AffilateController@userAdd',
        'controller' => 'App\\Http\\Controllers\\AffilateController@userAdd',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'affilate-add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general-settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@index',
        'controller' => 'App\\Http\\Controllers\\SettingsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general-settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-general-settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@index',
        'controller' => 'App\\Http\\Controllers\\SettingsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-general-settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-payment-type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminPaymentController@payment_type',
        'controller' => 'App\\Http\\Controllers\\AdminPaymentController@payment_type',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-payment-type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-type-store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment-type/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminPaymentController@payment_type_store',
        'controller' => 'App\\Http\\Controllers\\AdminPaymentController@payment_type_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment-type-store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-type-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment-type/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminPaymentController@payment_type_update',
        'controller' => 'App\\Http\\Controllers\\AdminPaymentController@payment_type_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment-type-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ErXlrVtmnjaB96My' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-type/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminPaymentController@payment_type_delete',
        'controller' => 'App\\Http\\Controllers\\AdminPaymentController@payment_type_delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ErXlrVtmnjaB96My',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-payment-way' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-way',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminPaymentController@payment_way',
        'controller' => 'App\\Http\\Controllers\\AdminPaymentController@payment_way',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-payment-way',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-way-store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment-way/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminPaymentController@payment_way_store',
        'controller' => 'App\\Http\\Controllers\\AdminPaymentController@payment_way_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment-way-store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment-way-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment-way/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminPaymentController@payment_way_update',
        'controller' => 'App\\Http\\Controllers\\AdminPaymentController@payment_way_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment-way-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1hR6vO0DQjlCJ41b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-way/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminPaymentController@payment_way_delete',
        'controller' => 'App\\Http\\Controllers\\AdminPaymentController@payment_way_delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1hR6vO0DQjlCJ41b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-account-info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminPaymentController@account_info',
        'controller' => 'App\\Http\\Controllers\\AdminPaymentController@account_info',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-account-info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account-info-store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/account-info/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminPaymentController@account_info_store',
        'controller' => 'App\\Http\\Controllers\\AdminPaymentController@account_info_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'account-info-store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account-info-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/account-info/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminPaymentController@account_info_update',
        'controller' => 'App\\Http\\Controllers\\AdminPaymentController@account_info_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'account-info-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w5ryxnAJiz6SNVJz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account-info/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminPaymentController@account_info_delete',
        'controller' => 'App\\Http\\Controllers\\AdminPaymentController@account_info_delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::w5ryxnAJiz6SNVJz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposit-elite' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add-deposit-usd/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@depositUSD',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@depositUSD',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deposit-elite',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f87CvRjpQ1wKrXgE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add-usd-approve/usd/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@approveUSD',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@approveUSD',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::f87CvRjpQ1wKrXgE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HrREBOTJ2zYFpz1p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add-money-rejected/usd/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@rejectUSD',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@rejectUSD',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HrREBOTJ2zYFpz1p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposit-manage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add-money/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@Manage',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@Manage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deposit-manage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rRMZkAhnIJoocDeO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add-money-approve/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@approve',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@approve',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rRMZkAhnIJoocDeO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RVWFvbqS0QuIo1rk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add-money-reject/{id}/{user_id}/{amount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@rejected',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@rejected',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RVWFvbqS0QuIo1rk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cjok7N5rqxkk4GQ8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add-money-rejected/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@rejectedDeposit',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@rejectedDeposit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Cjok7N5rqxkk4GQ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdraw-manage1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@ManageWithdraw',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@ManageWithdraw',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'withdraw-manage1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'musd-withdraw-approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/withdraw-approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@withdrawapprove',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@withdrawapprove',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'musd-withdraw-approve',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fcjg7CvgF7XxlIo7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw-reject/{id}/{user_id}/{amount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@withdrawrejected',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@withdrawrejected',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fcjg7CvgF7XxlIo7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usd-withdraw-manage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/usd-withdraw/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@ManageUsdWithdraw',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@ManageUsdWithdraw',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'usd-withdraw-manage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usd-withdraw-approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/usd-withdraw-approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@withdrawUsdApprove',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@withdrawUsdApprove',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'usd-withdraw-approve',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7orX3FeTNrrkDaEi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/usd-withdraw-reject/{id}/{user_id}/{amount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@withdrawUsdRejected',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@withdrawUsdRejected',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7orX3FeTNrrkDaEi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdraw-bonus-manage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw-bonus/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@ManageWithdrawBonus',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@ManageWithdrawBonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'withdraw-bonus-manage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdraw-bonus-approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/withdraw-bonus-approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@withdrawbonusapprove',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@withdrawbonusapprove',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'withdraw-bonus-approve',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PfqcaegbI9Md5M6F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/withdraw-bonus-reject/{id}/{user_id}/{amount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@withdrawbonusrejected',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@withdrawbonusrejected',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PfqcaegbI9Md5M6F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'token-rate-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/token-rate/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@token_rate_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@token_rate_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'token-rate-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ambassador-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ambassador/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@ambassador_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@ambassador_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ambassador-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer-info-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/transfer-info/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@transfer_info_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@transfer_info_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfer-info-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'topbar-info-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/topbar-info/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@topbar_info_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@topbar_info_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'topbar-info-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdraw-info-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/withdraw-info/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@withdraw_info_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@withdraw_info_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'withdraw-info-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usdt-withdraw-info-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/usdt-withdraw-info/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@usdt_withdraw_info_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@usdt_withdraw_info_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'usdt-withdraw-info-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/company-info/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@company_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@company_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'company-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tokens-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/token_settings/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@token_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@token_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tokens-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-level-settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/level_settings/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@level_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@level_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-level-settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-staking-settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/staking_settings/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@staking_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@staking_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-staking-settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-musdstaking-settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/musdstaking_settings/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@musdstaking_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@musdstaking_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-musdstaking-settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-merchant-settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/merchant_settings/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@merchant_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@merchant_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-merchant-settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-elite-settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/elite_settings/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@elite_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@elite_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-elite-settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/banner_settings/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@banner_update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@banner_update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'banner-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-user-lists' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user-lists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@user_lists',
        'controller' => 'App\\Http\\Controllers\\HomeController@user_lists',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-user-lists',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'all-users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/all-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@get_all_users',
        'controller' => 'App\\Http\\Controllers\\HomeController@get_all_users',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'all-users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'all_kyc_lists' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/all-kyc-lists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@all_kyc_lists',
        'controller' => 'App\\Http\\Controllers\\FrontendController@all_kyc_lists',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'all_kyc_lists',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search_user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@search_user',
        'controller' => 'App\\Http\\Controllers\\HomeController@search_user',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'search_user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-ambassador-lists' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ambassador-lists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@ambassador_lists',
        'controller' => 'App\\Http\\Controllers\\HomeController@ambassador_lists',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-ambassador-lists',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-merchant-lists' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/merchant-lists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@merchant_lists',
        'controller' => 'App\\Http\\Controllers\\HomeController@merchant_lists',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-merchant-lists',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-consultant-lists' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/consultant-lists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@consultant_lists',
        'controller' => 'App\\Http\\Controllers\\HomeController@consultant_lists',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-consultant-lists',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-elite-member-lists' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/elite-member-lists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@elite_member_lists',
        'controller' => 'App\\Http\\Controllers\\HomeController@elite_member_lists',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-elite-member-lists',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-consultant-store' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/consultant/add-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@add_consultant',
        'controller' => 'App\\Http\\Controllers\\HomeController@add_consultant',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-consultant-store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reset-password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user-password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@changePassword',
        'controller' => 'App\\Http\\Controllers\\HomeController@changePassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reset-password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cupon_settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cupon-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@cupon_settings',
        'controller' => 'App\\Http\\Controllers\\HomeController@cupon_settings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cupon_settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cupon-settings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cupon-settings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'cupon-settings.create',
        'uses' => 'App\\Http\\Controllers\\CuponSettingsController@create',
        'controller' => 'App\\Http\\Controllers\\CuponSettingsController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cupon-settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cupon-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'cupon-settings.store',
        'uses' => 'App\\Http\\Controllers\\CuponSettingsController@store',
        'controller' => 'App\\Http\\Controllers\\CuponSettingsController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cupon-settings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cupon-settings/{cupon_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'cupon-settings.show',
        'uses' => 'App\\Http\\Controllers\\CuponSettingsController@show',
        'controller' => 'App\\Http\\Controllers\\CuponSettingsController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cupon-settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cupon-settings/{cupon_setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'cupon-settings.edit',
        'uses' => 'App\\Http\\Controllers\\CuponSettingsController@edit',
        'controller' => 'App\\Http\\Controllers\\CuponSettingsController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cupon-settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/cupon-settings/{cupon_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'cupon-settings.update',
        'uses' => 'App\\Http\\Controllers\\CuponSettingsController@update',
        'controller' => 'App\\Http\\Controllers\\CuponSettingsController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cupon-settings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/cupon-settings/{cupon_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'cupon-settings.destroy',
        'uses' => 'App\\Http\\Controllers\\CuponSettingsController@destroy',
        'controller' => 'App\\Http\\Controllers\\CuponSettingsController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cupon-settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cupon-settings/newcupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CuponSettingsController@index',
        'controller' => 'App\\Http\\Controllers\\CuponSettingsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cupon-settings.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cupon_settings_store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cupon-settings/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@cupon_settings_store',
        'controller' => 'App\\Http\\Controllers\\HomeController@cupon_settings_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cupon_settings_store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-add-money' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/add-money/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@AdminAddMoney',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@AdminAddMoney',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-add-money',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-add-money-usdt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/add-money-usdt/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@AdminAddUsdt',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@AdminAddUsdt',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-add-money-usdt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-add-money-token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/add-money/token/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@AdminAddMoneyToken',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@AdminAddMoneyToken',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-add-money-token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-add-money-bonus' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/add-money/bonus/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@AdminAddMoneyBonus',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@AdminAddMoneyBonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-add-money-bonus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-add-ambassador-money' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ambassador/add-money/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@AdminAmbassadorAddMoney',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@AdminAmbassadorAddMoney',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-add-ambassador-money',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-add-ambassador-token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ambassador/add-token/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@AdminAmbassadorAddToken',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@AdminAmbassadorAddToken',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-add-ambassador-token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-community-token-list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/community-token-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CommunityTokenController@communityToken',
        'controller' => 'App\\Http\\Controllers\\CommunityTokenController@communityToken',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-community-token-list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store-community-token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/community-token/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CommunityTokenController@store',
        'controller' => 'App\\Http\\Controllers\\CommunityTokenController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store-community-token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'baseMindStageList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/base-mind-stage-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseMindController@index',
        'controller' => 'App\\Http\\Controllers\\BaseMindController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'baseMindStageList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeBmindStage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bmind-stage/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseMindController@store',
        'controller' => 'App\\Http\\Controllers\\BaseMindController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'storeBmindStage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nbUc6wHTkd1yLm1E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bmindstage/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseMindController@edit',
        'controller' => 'App\\Http\\Controllers\\BaseMindController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nbUc6wHTkd1yLm1E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateBmindStage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bmind-stage/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseMindController@update',
        'controller' => 'App\\Http\\Controllers\\BaseMindController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updateBmindStage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-target-lists' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bmind-user-target-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseMindController@target_lists',
        'controller' => 'App\\Http\\Controllers\\BaseMindController@target_lists',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-target-lists',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-target-store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bmind-target-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseMindController@target_store',
        'controller' => 'App\\Http\\Controllers\\BaseMindController@target_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-target-store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'baseMindPacakgeSettings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/base-mind-package-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseMindController@baseMindPacakgeSettings',
        'controller' => 'App\\Http\\Controllers\\BaseMindController@baseMindPacakgeSettings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'baseMindPacakgeSettings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'baseMindPacakgeAdd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/base-mind-package-add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseMindController@storeBmindPackage',
        'controller' => 'App\\Http\\Controllers\\BaseMindController@storeBmindPackage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'baseMindPacakgeAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xDjgK5q7PZv7aThM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bmind-package/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseMindController@baseMindPackageedit',
        'controller' => 'App\\Http\\Controllers\\BaseMindController@baseMindPackageedit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xDjgK5q7PZv7aThM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateBmindPackage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bmind-package/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseMindController@updateBmindPackage',
        'controller' => 'App\\Http\\Controllers\\BaseMindController@updateBmindPackage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updateBmindPackage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-packages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/packages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PackageController@index',
        'controller' => 'App\\Http\\Controllers\\PackageController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-packages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store-package' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/packages/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PackageController@store',
        'controller' => 'App\\Http\\Controllers\\PackageController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store-package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-package' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/packages/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PackageController@update',
        'controller' => 'App\\Http\\Controllers\\PackageController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-package',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uXuxcinv0CkiWqxa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/packages/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PackageController@delete',
        'controller' => 'App\\Http\\Controllers\\PackageController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uXuxcinv0CkiWqxa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dp70UivN72SYYaHJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/packages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PackageController@edit',
        'controller' => 'App\\Http\\Controllers\\PackageController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dp70UivN72SYYaHJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'make-ambassador' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/make-ambassador',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@MakeAmbassador',
        'controller' => 'App\\Http\\Controllers\\HomeController@MakeAmbassador',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'make-ambassador',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'make-consultant' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/make-consultant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@MakeConsultant',
        'controller' => 'App\\Http\\Controllers\\HomeController@MakeConsultant',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'make-consultant',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'remove-consultant' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/remove-consultant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@RemoveConsultant',
        'controller' => 'App\\Http\\Controllers\\HomeController@RemoveConsultant',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'remove-consultant',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-restrict' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user-restrict',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@UserRestrict',
        'controller' => 'App\\Http\\Controllers\\HomeController@UserRestrict',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-restrict',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-unrestrict' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user-unrestrict',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@UserUnRestrict',
        'controller' => 'App\\Http\\Controllers\\HomeController@UserUnRestrict',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-unrestrict',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-transaction-report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transaction-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@AdminTransaction',
        'controller' => 'App\\Http\\Controllers\\HomeController@AdminTransaction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin-transaction-report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z3q7zowVnHSuHyh9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/kyc-verification/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@Kyc',
        'controller' => 'App\\Http\\Controllers\\FrontendController@Kyc',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::z3q7zowVnHSuHyh9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kyc-store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/kyc-verification/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@KycStore',
        'controller' => 'App\\Http\\Controllers\\FrontendController@KycStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'kyc-store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kyc-approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'home/kyc-verification/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@KycApprove',
        'controller' => 'App\\Http\\Controllers\\FrontendController@KycApprove',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'kyc-approve',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kyc-verification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/kyc-verifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@KycVerification',
        'controller' => 'App\\Http\\Controllers\\FrontendController@KycVerification',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'kyc-verification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1mgTfvp8f9VDzOBC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/kyc-verifications/reject/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@KycReject',
        'controller' => 'App\\Http\\Controllers\\FrontendController@KycReject',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1mgTfvp8f9VDzOBC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zsx4JKgk0JcRsjNy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/add-mind/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@mind_index',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@mind_index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Zsx4JKgk0JcRsjNy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'token-store-manual' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/add-mind/manually/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@StoreMindManual',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@StoreMindManual',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'token-store-manual',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposit-token-manage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add-token/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@ManageToken',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@ManageToken',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'deposit-token-manage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::us0uz9uIjYKY7rxQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add-token-approve/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@approveToken',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@approveToken',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::us0uz9uIjYKY7rxQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JYTA03d0qdEmrOO3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add-token-reject/{id}/{user_id}/{amount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@rejectedToken',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@rejectedToken',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JYTA03d0qdEmrOO3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wCPeNOgbaVwIuH02' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add-token-rejected/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminShowPaymentController@rejectedDepositToken',
        'controller' => 'App\\Http\\Controllers\\AdminShowPaymentController@rejectedDepositToken',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wCPeNOgbaVwIuH02',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'email-verification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-verification-email/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@verification',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@verification',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'email-verification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send-bonus-confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send-bonus-confirmation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@Coin_bonus_transfer_Confirm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@Coin_bonus_transfer_Confirm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send-bonus-confirmation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usdt-send-confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send-usdt-confirmation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@usdt_transfer_Confirm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@usdt_transfer_Confirm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'usdt-send-confirmation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send-fund-confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send-fund-confirmation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@TransferFundConfirm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@TransferFundConfirm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'send-fund-confirmation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'withdraw-fund-confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'withdraw-fund-confirmation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@fundwithdrawconfirmation',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@fundwithdrawconfirmation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'withdraw-fund-confirmation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'musd-withdraw-cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'withdraw-fund-cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AddMoneyController@musdWithdrawCancel',
        'controller' => 'App\\Http\\Controllers\\AddMoneyController@musdWithdrawCancel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'musd-withdraw-cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FCUAqFU5AEg4C3uX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/get-user-id/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@user_id',
        'controller' => 'App\\Http\\Controllers\\HomeController@user_id',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FCUAqFU5AEg4C3uX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CEDdf7qjzA58IQ9o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/get-profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@profile_id',
        'controller' => 'App\\Http\\Controllers\\HomeController@profile_id',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CEDdf7qjzA58IQ9o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/get-user-ajax/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@profile_id',
        'controller' => 'App\\Http\\Controllers\\HomeController@profile_id',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user_ajax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.compose.email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/compose-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminEmailController@compose',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminEmailController@compose',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.compose.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.send.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/send-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminEmailController@send',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminEmailController@send',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.send.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ckeditor.image-upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ckeditor/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminEmailController@upload',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminEmailController@upload',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ckeditor.image-upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/verify/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@verifyAccount',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@verifyAccount',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cash-wallet-transaction' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cashwallet-transaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@CashwalletTransaction',
        'controller' => 'App\\Http\\Controllers\\HomeController@CashwalletTransaction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cash-wallet-transaction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bonus-wallet-transaction' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bonuswallet-transaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@BonuswalletTransaction',
        'controller' => 'App\\Http\\Controllers\\HomeController@BonuswalletTransaction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bonus-wallet-transaction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'token-wallet-transaction' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tokenwallet-transaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@TokenwalletTransaction',
        'controller' => 'App\\Http\\Controllers\\HomeController@TokenwalletTransaction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'token-wallet-transaction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gGy1t6yUaAIjZGZE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/usd-staking-bonus-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@usdStakingBonus',
        'controller' => 'App\\Http\\Controllers\\FrontendController@usdStakingBonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gGy1t6yUaAIjZGZE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SNpMBjVI16R8OMt6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/elite-sponsor-bonus-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@eliteSponsorBonus',
        'controller' => 'App\\Http\\Controllers\\FrontendController@eliteSponsorBonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SNpMBjVI16R8OMt6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8i1F0IRlY6XKEFfB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/elite-deposit-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@eliteDepositHistory',
        'controller' => 'App\\Http\\Controllers\\FrontendController@eliteDepositHistory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8i1F0IRlY6XKEFfB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KbTpUOb4mHTT1H6L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/affilate-bonus-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@AffiliateBonus',
        'controller' => 'App\\Http\\Controllers\\FrontendController@AffiliateBonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KbTpUOb4mHTT1H6L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EAYxJP8nOAMlseri' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/refferer-bonus-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@ReffererBonus',
        'controller' => 'App\\Http\\Controllers\\FrontendController@ReffererBonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EAYxJP8nOAMlseri',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dBQqUHGtTvsM9zYm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/daily-bonus-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@DailyBonus',
        'controller' => 'App\\Http\\Controllers\\FrontendController@DailyBonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dBQqUHGtTvsM9zYm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d2jMiz8xcoxg4pjA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/staking-bonus-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@StakingBonus',
        'controller' => 'App\\Http\\Controllers\\FrontendController@StakingBonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::d2jMiz8xcoxg4pjA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::64DtufiYlQpYzNBI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/level-bonus-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@LevelBonus',
        'controller' => 'App\\Http\\Controllers\\FrontendController@LevelBonus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::64DtufiYlQpYzNBI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HFlkWmJxwUSrHcV9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/transfer-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@TransferHistory',
        'controller' => 'App\\Http\\Controllers\\FrontendController@TransferHistory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HFlkWmJxwUSrHcV9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RRadDlwsI02qCr1X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/withdraw-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@WithdrawHistory',
        'controller' => 'App\\Http\\Controllers\\FrontendController@WithdrawHistory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RRadDlwsI02qCr1X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O3UH7qxAdsb6WQti' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/other-transaction-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@OtherHistory',
        'controller' => 'App\\Http\\Controllers\\FrontendController@OtherHistory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::O3UH7qxAdsb6WQti',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n2mGuiDSkNZHJzDa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/token-settlement-bonus-history/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@TokenSettlement',
        'controller' => 'App\\Http\\Controllers\\FrontendController@TokenSettlement',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::n2mGuiDSkNZHJzDa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_cupon.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/user-redeem',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CuponSettingsController@user_cupon_index',
        'controller' => 'App\\Http\\Controllers\\CuponSettingsController@user_cupon_index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user_cupon.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_cupon.redeem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/user-redeem/redeem/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CuponSettingsController@user_cupon_redeem',
        'controller' => 'App\\Http\\Controllers\\CuponSettingsController@user_cupon_redeem',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user_cupon.redeem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
