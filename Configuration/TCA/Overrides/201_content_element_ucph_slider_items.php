<?php

/*
 * This file is part of the package ucph_content_slider.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 * University of Copenhagen.
 */

defined('TYPO3') or die('Access denied.');

call_user_func(function ($extKey ='ucph_content_slider', $contentType ='ucph_content_slider') {
    // Add Content Element
    if (!is_array($GLOBALS['TCA']['tt_content']['types'][$contentType] ?? false)) {
        $GLOBALS['TCA']['tt_content']['types'][$contentType] = [];
    }

    // Add content element PageTSConfig
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extKey,
        'Configuration/TsConfig/Page/ucph_content_slider.tsconfig',
        'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:slider_title'
    );

    // Add content element to selector list
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:slider_title',
            $contentType,
            'ucph-ce-slider-icon',
            $extKey
        ]
    );

    // Assign Icon
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes'][$contentType] = 'ucph-ce-slider-icon';

    // Configure element type
    $GLOBALS['TCA']['tt_content']['types'][$contentType] = array_replace_recursive(
        $GLOBALS['TCA']['tt_content']['types'][$contentType],
        [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                    tx_ucph_slider_item,
                --div--;LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:settings,
                    pi_flexform;LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:settings,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            '
        ]
    );

    // Register fields
    $GLOBALS['TCA']['tt_content']['columns'] = array_replace_recursive(
        $GLOBALS['TCA']['tt_content']['columns'],
        [
            'tx_ucph_slider_item' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:swiper_item_below',
                'config' => [
                    'type' => 'inline',
                    'minitems' => 1,
                    'foreign_table' => 'tx_ucph_slider_item',
                    'foreign_field' => 'tt_content',
                    'appearance' => [
                        'newRecordLinkTitle' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:swiper_item',
                        'useSortable' => true,
                        'showSynchronizationLink' => true,
                        'showAllLocalizationLink' => true,
                        'showPossibleLocalizationRecords' => true,
                        'expandSingle' => true,
                        'enabledControls' => [
                            'localize' => true,
                        ]
                    ],
                    'behaviour' => [
                        'mode' => 'select',
                    ]
                ]
            ]
        ]
    );

    // Add flexForms for content element configuration
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:' . $extKey . '/Configuration/Flexforms/default.xml',
        $contentType
    );
});