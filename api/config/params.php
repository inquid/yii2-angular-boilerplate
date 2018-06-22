<?php

$paginationParams = [
    'pageParam',
    'pageSizeParam',
    'params',
    'totalCount',
    'defaultPageSize',
    'pageSizeLimit'
];

return [
    'frontendURL' => 'http://35.193.210.198/frontend/',
    'supportEmail' => 'admin@example.com',
    'adminEmail' => 'admin@example.com',
    'jwtSecretCode' => 'someSecretKey',
    'user.passwordResetTokenExpire' => 3600,
    'paginationParams' => $paginationParams,
];
