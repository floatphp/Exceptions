<?php
/**
 * @author     : Jakiboy
 * @package    : FloatPHP
 * @subpackage : Exceptions Component
 * @version    : 1.3.x
 * @copyright  : (c) 2018 - 2024 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link       : https://floatphp.com
 * @license    : MIT
 *
 * This file if a part of FloatPHP Framework.
 */

declare(strict_types=1);

namespace FloatPHP\Exceptions\Kernel;

class ConfigurationException extends \Exception
{
    public static function invalidApplicationConfiguration($error) : string
    {
        return "Invalid Application Configuration : {$error}";
    }

    public static function invalidApplicationConfigurationFile() : string
    {
        return 'Invalid Application Configuration File';
    }

    public static function invalidModuleConfiguration($error) : string
    {
        return "Invalid Module Configuration : {$error}";
    }

    public static function invalidModuleConfigurationFile() : string
    {
        return 'Invalid Module Configuration File';
    }

    public static function invalidRouteConfiguration($error) : string
    {
        return "Invalid Route Configuration : {$error}";
    }

    public static function invalidRouteConfigurationFile() : string
    {
        return 'Invalid Route Configuration File';
    }

    public static function invalidDatabaseConfiguration() : string
    {
        return "Invalid Database Configuration";
    }
}
