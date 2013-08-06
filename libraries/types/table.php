<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined("JPATH_PLATFORM") or die;

/**
 * A table on the page.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/Table
 * @since       13.1
*/
abstract class TypeTable extends TypeWebPageElement
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/Table';
}
