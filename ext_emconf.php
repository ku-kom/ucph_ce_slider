<?php

/*
 * This file is part of the package ucph_ce_slider.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 * May 2023, Nanna Ellegaard.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'UCPH TYPO3 content element slider',
    'description' => 'Contains two TYPO3 content elements - one for slides containing image and/or text, one for adding existing records.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
        ],
        'conflicts' => [
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Nanna Ellegaard',
    'author_email' => 'nel@adm.ku.dk',
    'author_company' => 'University of Copenhagen',
    'version' => '1.0.0',
];
