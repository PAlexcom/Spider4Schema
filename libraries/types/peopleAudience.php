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
 * A set of characteristics belonging to people, e.g. who compose an item's target audience.
 *
 * @package     Joomla.Platform
 * @subpackage  Microdata
 *
 * @see         http://schema.org/PeopleAudience
 * @since       13.1
*/
abstract class TypePeopleAudience extends TypeAudience
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/PeopleAudience';

	/**
	 * Expectations for health conditions of target audience
	 * Expected Type: MedicalCondition
	 * 
	 * @var	array
	 */
	protected static $healthCondition = array('value' => 'healthCondition',
		'expectedTypes' => array('MedicalCondition')
	);

	/**
	 * The gender of the person or audience.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $suggestedGender = array('value' => 'suggestedGender',
		'expectedTypes' => array('Text')
	);

	/**
	 * Maximal age recommended for viewing content
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $suggestedMaxAge = array('value' => 'suggestedMaxAge',
		'expectedTypes' => array('Number')
	);

	/**
	 * Minimal age recommended for viewing content
	 * Expected Type: Number
	 * 
	 * @var	array
	 */
	protected static $suggestedMinAge = array('value' => 'suggestedMinAge',
		'expectedTypes' => array('Number')
	);

	/**
	 * Return the 'healthCondition' Property value
	 *
	 * @return	string
	 */
	public static function pHealthCondition()
	{
		return self::getValue(self::$healthCondition);
	}

	/**
	 * Return the 'suggestedGender' Property value
	 *
	 * @return	string
	 */
	public static function pSuggestedGender()
	{
		return self::getValue(self::$suggestedGender);
	}

	/**
	 * Return the 'suggestedMaxAge' Property value
	 *
	 * @return	string
	 */
	public static function pSuggestedMaxAge()
	{
		return self::getValue(self::$suggestedMaxAge);
	}

	/**
	 * Return the 'suggestedMinAge' Property value
	 *
	 * @return	string
	 */
	public static function pSuggestedMinAge()
	{
		return self::getValue(self::$suggestedMinAge);
	}
}
