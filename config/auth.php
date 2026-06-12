<?php

return [
    'jwt_secret' => 'change_me_in_production',
    'jwt_expire' => 3600,

    'password' => [
        'algo' => PASSWORD_BCRYPT,
        'cost' => 12,
    ],

    'rbac' => [
        'super_admin_role' => 'admin',
    ],
];
