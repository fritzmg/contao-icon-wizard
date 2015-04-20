<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   iconWizard
 * @author    netzmacht creative David Molineus
 * @license   MPL/2.0
 * @copyright 2013 netzmacht creative David Molineus
 */


$GLOBALS['BE_FFL']['icon'] = 'Netzmacht\Contao\IconWizard\IconWidget';

$GLOBALS['TL_CONFIG']['iconWizardIconTemplate'] = '<i class="icon-%s"></i>';

if(TL_MODE == 'BE') {
	$GLOBALS['TL_CSS']['iconWizard'] = 'system/modules/icon-wizard/assets/wizard.css';
}
