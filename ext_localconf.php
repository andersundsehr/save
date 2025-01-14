<?php

/*  | This extension is made with ❤ for TYPO3 CMS and is licensed
 *  | under GNU General Public License.
 *  |
 *  | (c) 2019-2022 Armin Vieweg <armin@v.ieweg.de>
 */

if (!defined('TYPO3_MODE') && !defined('TYPO3')) {
    die('Access denied.');
}

if (defined('TYPO3_MODE') && TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['Backend\Template\Components\ButtonBar']['getButtonsHook']['save'] =
        \T3\Save\Hooks\ButtonBarHook::class . '->loadRequireJsModule';
}
