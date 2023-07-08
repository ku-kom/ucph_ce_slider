<?php

defined('TYPO3') or die('Access denied.');

call_user_func(function () {
    /**
     * Temporary variables
     */
    $extensionKey = 'ucph_ce_slider';

    /**
     * Default TypoScript for ucph_ce_slider
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'UCPH TYPO3 Slider'
    );
});
