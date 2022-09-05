<?php

use controllers\IndexController;

# Without access rights because not needed
return [
    '/' => [
        'action' => [IndexController::class, 'index']
    ],
    '/sendPoint' => [
        'action' =>[IndexController::class, 'sendPoint']
    ],
];
