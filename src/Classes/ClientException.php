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

namespace FloatPHP\Exceptions\Classes;

final class ClientException extends \Exception
{
    public static function invalidGateway() : string
    {
        return 'Invalid Http Gateway (Missing cURL and Stream functions)';
    }
}
