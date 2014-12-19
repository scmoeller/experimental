<?php

namespace Scmoeller\Experimental\Stash;

use DateTime;
use Stash\Driver\Ephemeral;
use Stash\Pool;

require_once __DIR__ . '/../../../../vendor/autoload.php';

$driver = new Ephemeral();

$pool = new Pool($driver);

$item = $pool->getItem('Test');

if ($item->isMiss()) {
    $data = ['EMB-170', 'EMB-175', 'EMB-190', 'EMB-195'];
    
    $expirationDate = new DateTime('now');
    
    $expirationDate->modify('23:59:59');
    
    $item->set($data, $expirationDate);
} else {
    $data = $item->get();
}

echo "Verfallsdatum: ", $expirationDate->format('d.m.Y H:i:s'), "\n";

print_r($data);


