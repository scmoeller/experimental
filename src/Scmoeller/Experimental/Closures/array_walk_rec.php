<?php

namespace Scmoeller\Experimental;

$filter = [
    'Grade' => [
        'name'      => '5c',
        'level'     => 5,
        'status'    => [
            'neu', 'inoffiziell'
        ]
    ]
];

$callback = function ($item, $key) {
    echo $key . $item, "\n";
};

array_walk_recursive($filter, $callback);

