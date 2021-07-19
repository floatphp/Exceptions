<?php
/**
 * @author    : JIHAD SINNAOUR
 * @package   : FloatPHP
 * @subpackage: Exceptions Component
 * @version   : 1.0.0
 * @category  : PHP framework
 * @copyright : (c) 2017 - 2021 JIHAD SINNAOUR <mail@jihadsinnaour.com>
 * @link      : https://www.floatphp.com
 * @license   : MIT License
 *
 * This file if a part of FloatPHP Framework
 */

namespace FloatPHP\Exceptions\Kernel;

use FloatPHP\Classes\System\Exception;

class ConfigException extends \Exception
{
	/**
	 * @access public
	 * @var int $code
	 * @return string
	 */
	public function get(int $code = 1) : string
	{
		$header = "[FloatPHPException]";
		$message = "{$header} Error [{$code}] : {$this->getError($code)}";
		if ( $this->getMessage() ) {
			$message .= " ({$this->getMessage()})";
		}
		return $message;
	}

	/**
	 * @access private
	 * @var int $code
	 * @return string
	 */
	private function getError(int $code) : string
	{
		switch ( intval($code) ) {
			case 1:
				return 'Invalid Application Configuration';
				break;
			case 2:
				return 'Invalid Module Configuration';
				break;
			case 3:
				return 'Invalid Route Configuration';
				break;
			case 4:
				return 'Invalid Database Configuration';
				break;
		}
		return 'Invalid Configuration';
	}
}
