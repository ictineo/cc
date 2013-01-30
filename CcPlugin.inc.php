<?php

/**
 * @file CcPlugin.inc.php
 *
 * Copyright (c) 2013 Projecte Ictineo (www.projecteictineo.com)
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ccPlugin
 * @ingroup plugins_generic_cc
 *
 * @brief Creative Commons licence plugin class
 */

// $Id$

// TODO Config section to select the license
// TODO Add strings in local for each license


import('lib.pkp.classes.plugins.GenericPlugin');

class CcPlugin extends GenericPlugin {
	function register($category, $path) {
		if (parent::register($category, $path)) {
			if ($this->getEnabled()) {
				HookRegistry::register('Templates::Common::Footer::cc',array(&$this, 'callbackInsertcc'));
			}
			return true;
		}
		return false;
	}

	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return Locale::translate('plugins.generic.cc.displayName');
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return Locale::translate('plugins.generic.cc.description');
	}
  
  function callbackInsertcc($hookName, $params) {
      $smarty = &$params[1];
      $output = &$params[2];
      
      print Locale::translate('plugins.generic.cc.license');
    return false;
  }

}

?>
