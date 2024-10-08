<?php
/**
 * @author     : Jakiboy
 * @package    : FloatPHP
 * @subpackage : Exceptions Component
 * @version    : 1.1.0
 * @copyright  : (c) 2018 - 2024 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link       : https://floatphp.com
 * @license    : MIT
 *
 * This file if a part of FloatPHP Framework.
 */

declare(strict_types=1);

namespace FloatPHP\Exceptions\Helpers;

class CacheException extends \Exception
{
	public static function invalidCacheDriver($driver)
	{
		return "Invalid cache driver : {$driver}";
	}

    public static function invalidCacheInstance()
    {
        return 'Invalid driver instance : Must implements CacheInterface';
    }
}
