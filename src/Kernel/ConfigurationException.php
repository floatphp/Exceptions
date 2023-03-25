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

namespace FloatPHP\Exceptions\Kernel;

class ConfigurationException extends \Exception
{
	public static function invalidApplicationConfiguration($error)
	{
		return "Invalid Application Configuration : {$error}";
	}

    public static function invalidApplicationConfigurationFile()
    {
        return 'Invalid Application Configuration File';
    }

    public static function invalidModuleConfiguration($error)
    {
        return "Invalid Module Configuration : {$error}";
    }

    public static function invalidModuleConfigurationFile()
    {
        return 'Invalid Module Configuration File';
    }

    public static function invalidRouteConfiguration($error)
    {
        return "Invalid Route Configuration : {$error}";
    }
    
    public static function invalidRouteConfigurationFile()
    {
        return 'Invalid Route Configuration File';
    }

    public static function invalidDatabaseConfiguration()
    {
        return "Invalid Database Configuration";
    }
}
