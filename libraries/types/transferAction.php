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
 * The act of transferring/moving (abstract or concrete) animate or inanimate objects from one place to another.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/TransferAction
 * @since       13.1
*/
abstract class TypeTransferAction extends TypeAction
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/TransferAction';

	/**
	 * A sub property of location. The original location of the object or the agent before the action.
	 * Expected Type: Number, Place
	 * 
	 * @var	array
	 */
	protected static $fromLocation = array('value' => 'fromLocation',
		'expectedTypes' => array('Number', 'Place')
	);

	/**
	 * A sub property of location. The final location of the object or the agent after the action.
	 * Expected Type: Number, Place
	 * 
	 * @var	array
	 */
	protected static $toLocation = array('value' => 'toLocation',
		'expectedTypes' => array('Number', 'Place')
	);

	/**
	 * Return the 'fromLocation' Property value
	 *
	 * @return	string
	 */
	public static function pFromLocation()
	{
		return self::getValue(self::$fromLocation);
	}

	/**
	 * Return the 'toLocation' Property value
	 *
	 * @return	string
	 */
	public static function pToLocation()
	{
		return self::getValue(self::$toLocation);
	}
}