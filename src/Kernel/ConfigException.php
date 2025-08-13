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

namespace FloatPHP\Exceptions\Kernel;

class ConfigException extends \Exception
{
    public static function invalidConfigFile(string $file) : string
    {
        return "Couldn't find app configuration file: '{$file}'";
    }

    public static function invalidConfigFormat(string $schema) : string
    {
        return "Invalid app configuration JSON format: '{$schema}'";
    }

    public static function invalidConfig(string $error, string $schema) : string
    {
        return "Invalid app configuration: '{$error}' in '{$schema}'";
    }

    public static function undefinedAppDir() : string
    {
        return 'Undefined global __APP_';
    }

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
