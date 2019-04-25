<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [],
    'emergencyContacts' => require_once('emergency-contacts.php'),
    'refugeeContacts' => require_once('refugee-contacts.php'),
];
