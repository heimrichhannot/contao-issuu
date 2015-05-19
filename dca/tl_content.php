<?php
/**
 * Contao Open Source CMS
 * 
 * Copyright (c) 2015 Heimrich & Hannot GmbH
 * @package issuu
 * @author Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

$dc = &$GLOBALS['TL_DCA']['tl_content'];

/**
 * Palettes
 */

$dc['palettes']['issuu'] = '{type_legend},type,headline;{issuu_legend},issuuConfigID;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

/**
 * Fields
 */

$arrFields = array
(
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