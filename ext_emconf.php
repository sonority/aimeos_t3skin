<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Aimeos TYPO3-Backend-Skin',
    'description' => 'TYPO3 Backend-Skin for Aimeos-Shops',
    'category' => '',
    'state' => 'stable',
    'clearcacheonload' => true,
    'author' => 'Stephan Kellermayr',
    'author_email' => 'stephan.kellermayr@gmail.com',
    'author_company' => 'sonority.at - MULTIMEDIA ART DESIGN',
    'version' => '0.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.99.99',
            'aimeos' => '20.4.0-20.99.99',
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
