<?php

return [
    'serverKey' => env('MIDTRANS_SERVER_KEY',''),
    'isProduction' => env('MIDTRANS_IS_PRODUCTION', false),
    'isSanitized' => env('MIDTRANS_IS_SANITIZED',''),
    'is3ds' => env('MIDTRANS_IS_3DS',''),
];