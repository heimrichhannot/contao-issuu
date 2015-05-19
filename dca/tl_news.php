<?php
/**
 * Contao Open Source CMS
 * 
 * Copyright (c) 2015 Heimrich & Hannot GmbH
 * @package issuu
 * @author Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

\Controller::loadLanguageFile('tl_content');

$dc = &$GLOBALS['TL_DCA']['tl_news'];

/**
 * Palettes
 */

$dc['palettes']['__selector__'][] = 'addIssuu';
$dc['palettes']['default'] = str_replace('addImage;', 'addImage;{issuu_legend},addIssuu;', $dc['palettes']['default']);

/**
 * Subpalettes
 */

$dc['subpalettes']['addIssuu'] = 'issuuConfigID';

/**
 * Fields
 */

$arrFields = array
(
	'addIssuu' => array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_news']['addIssuu'],
		'exclude'                 => true,
		'inputType'               => 'checkbox',
		'eval'                    => array('submitOnChange'=>true),
		'sql'                     => "char(1) NOT NULL default ''"
	),
	'issuuConfigID' => array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_content']['issuuConfigID'],
		'exclude'                 => true,
		'search'                  => true,
		'inputType'               => 'text',
		'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
		'sql'                     => "varchar(255) NOT NULL default ''"
	)
);

$dc['fields'] = array_merge($dc['fields'], $arrFields);