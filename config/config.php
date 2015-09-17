<?php
/**
 * Contao Open Source CMS
 * 
 * Copyright (c) 2015 Heimrich & Hannot GmbH
 * @package issuu
 * @author Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */


/**
 * Content elements
 */
$GLOBALS['TL_CTE']['media']['issuu'] = 'HeimrichHannot\Issuu\ContentIssuu';

/**
 * Javascript
 */
if(TL_MODE == 'FE')
{
	$GLOBALS['TL_JAVASCRIPT']['jquery.issuu'] = 'system/modules/issuu/assets/js/jquery.issuu' . (!$GLOBALS['TL_CONFIG']['debugMode'] ? '.min' : '') . '.js|static';
}
