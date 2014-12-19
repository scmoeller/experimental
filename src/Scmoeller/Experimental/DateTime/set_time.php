<?php

$expirationDate = new DateTime('now');

echo "Aktuelles Datum:\n", $expirationDate->format('d.m.Y H:i:s'), "\n";

// Setzt die Uhrzeit für den aktuellen Tag.
$expirationDate->modify('23:59:59');

echo "\nAngepasstes Datum:\n", $expirationDate->format('d.m.Y H:i:s'), "\n";

