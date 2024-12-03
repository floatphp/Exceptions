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

namespace FloatPHP\Exceptions\Helpers;

class CrawlerException extends \Exception
{
    public static function insufficientResources(int $cores = 2) : string
    {
        return "Insufficient server resources: Ensure adequate memory and CPU cores ({$cores}) are available";
    }
}
