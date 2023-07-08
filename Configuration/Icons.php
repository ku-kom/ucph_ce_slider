<?php

/*
 * This file is part of the package ku_swiper.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 * May 2023 Nanna Ellegaard, University of Copenhagen.
 */

/**
 * Icon registry
 */

defined('TYPO3_MODE') || die();

return [
    // icon identifier
    'ucph-ce-slider-icon' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:ucph_ce_slider/Resources/Public/Icons/slider.svg',
    ],
];
