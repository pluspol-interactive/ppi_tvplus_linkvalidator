<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'TemplaVoilà! Plus - Link Validator',
    'description' => 'Allows the Link Validator to check links inside TemplaVoilà! Plus elements',
    'category' => 'plugin',
    'version' => '0.2.0',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author' => 'Alexander Opitz',
    'author_email' => 'alexander.opitz@pluspol-interactive.de',
    'author_company' => 'PLUSPOL interactive GbR',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-7.3.99',
            'typo3' => '7.6.0-9.5.99',
            'linkvalidator' => '7.6.0-9.5.99',
            'templavoilaplus' => '7.1.2-7.99.99'
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Ppi\\Templavoilaplus\\Linkvalidator\\' => 'Classes/',
        ],
    ],
];
