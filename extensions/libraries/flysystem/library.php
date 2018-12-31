<?php
/**
 * @package     Phproberto.Joomla-Flysystem
 * @subpackage  Library
 *
 * @copyright  Copyright (C) 2017 Roberto Segura López, Inc. All rights reserved.
 * @license    See COPYING.txt
 */

defined('_JEXEC') || die;

defined('JPATH_FLYSYSTEM_LIBRARY') || define('JPATH_FLYSYSTEM_LIBRARY', __DIR__);

$composerAutoload = __DIR__ . '/vendor/autoload.php';

if (!file_exists($composerAutoload))
{
	throw new \RuntimeException("Cannot find Flysystem library autoloader");
}

require_once $composerAutoload;

// Load library language
$lang = JFactory::getLanguage();
$lang->load('lib_phproberto_flysystem', __DIR__);
