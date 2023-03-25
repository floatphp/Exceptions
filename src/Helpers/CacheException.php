<?php
/**
 * @author     : JIHAD SINNAOUR
 * @package    : FloatPHP
 * @subpackage : Exceptions Component
 * @version    : 1.0.2
 * @category   : PHP framework
 * @copyright  : (c) 2017 - 2023 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link       : https://www.floatphp.com
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
