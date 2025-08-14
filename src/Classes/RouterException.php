<?php
/**
 * @author     : Jakiboy
 * @package    : FloatPHP
 * @subpackage : Exceptions Component
 * @version    : 1.5.x
 * @copyright  : (c) 2018 - 2025 Jihad Sinnaour <me@jihadsinnaour.com>
 * @link       : https://floatphp.com
 * @license    : MIT
 *
 * This file is a part of FloatPHP Framework.
 */

declare(strict_types=1);

namespace FloatPHP\Exceptions\Classes;

class RouterException extends \RuntimeException
{
	public static function redeclared(?string $name = null) : string
	{
		return "Can not redeclare route '{$name}'";
	}

	public static function notExisting(?string $name = null) : string
	{
		return "Route '{$name}' does not exist";
	}

	public static function notTraversable() : string
	{
		return 'Routes should be an array or an instance of Traversable';
	}
}
