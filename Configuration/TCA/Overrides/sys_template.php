<?php

defined('TYPO3') or die('Access denied.');

call_user_func(function () {
    $extensionKey = 'ucph_content_slider';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'UCPH TYPO3 content element "Slider"'
    );
});
