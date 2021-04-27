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
 */

namespace FloatPHP\Exceptions\Kernel;

use FloatPHP\Classes\System\Exception;

class ConfigException extends Exception
{
	/**
	 * @access public
	 * @var int $code
	 * @return string
	 */
	public function get($code = 1)
	{
		$header = "[FloatPHPException][{$code}]";
		$message = "{$header} Error : {$this->getError($code)}";
		$message .= "<br>{$header} Line : {$this->getLine()} in {$this->getFile()}";
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
	private function getError($code)
	{
		switch ( intval($code) ) {
			case 1:
				return 'Invalid Application Configuration';
				break;
		}
		return 'Unknown error';
	}
}
