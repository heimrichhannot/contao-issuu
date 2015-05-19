<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'HeimrichHannot\Issuu\ContentIssuu' => 'system/modules/issuu/elements/ContentIssuu.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_issuu' => 'system/modules/issuu/templates/elements',
));
