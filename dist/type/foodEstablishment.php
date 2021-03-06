<?php
/**
 * A food-related business.
 *
 * @see    http://schema.org/FoodEstablishment
*/
abstract class TypeFoodEstablishment extends TypeLocalBusiness
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/FoodEstablishment';

	/**
	 * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards compatibility) the strings Yes or No.
	 * Expected Type: Boolean, URL, Text
	 * 
	 * @var	array
	 */
	protected static $acceptsReservations = array('value' => 'acceptsReservations',
		'expectedTypes' => array('Boolean', 'URL', 'Text')
	);

	/**
	 * Either the actual menu or a URL of the menu.
	 * Expected Type: URL, Text
	 * 
	 * @var	array
	 */
	protected static $menu = array('value' => 'menu',
		'expectedTypes' => array('URL', 'Text')
	);

	/**
	 * The cuisine of the restaurant.
	 * Expected Type: Text
	 * 
	 * @var	array
	 */
	protected static $servesCuisine = array('value' => 'servesCuisine',
		'expectedTypes' => array('Text')
	);

	/**
	 * Return the 'acceptsReservations' Property value
	 *
	 * @return	string
	 */
	public static function pAcceptsReservations()
	{
		return self::getValue(self::$acceptsReservations);
	}

	/**
	 * Return the 'menu' Property value
	 *
	 * @return	string
	 */
	public static function pMenu()
	{
		return self::getValue(self::$menu);
	}

	/**
	 * Return the 'servesCuisine' Property value
	 *
	 * @return	string
	 */
	public static function pServesCuisine()
	{
		return self::getValue(self::$servesCuisine);
	}
}
