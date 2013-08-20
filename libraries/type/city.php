<?php
/**
 * A city or town.
 *
 * @see    http://schema.org/City
 * @since  1.0
*/
abstract class TypeCity extends TypeAdministrativeArea
{
	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	protected static $scope = 'https://schema.org/City';
}
