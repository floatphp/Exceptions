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
 * This file if a part of FloatPHP Framework.
 */

declare(strict_types=1);

namespace FloatPHP\Exceptions\Helpers;

class CacheException extends \Exception
{
    public static function invalidCacheDriver($driver) : string
    {
        return "Invalid cache driver : {$driver}";
    }

    public static function invalidCacheInstance() : string
    {
        return 'Invalid cache instance : Must implements CacheInterface';
    }
}
