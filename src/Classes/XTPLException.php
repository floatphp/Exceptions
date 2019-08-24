<?php
/**
 * @author    : JIHAD SINNAOUR
 * @package   : FloatPHP
 * @subpackage: Exceptions Component
 * @version   : 1.0.0
 * @category  : PHP framework
 * @copyright : (c) JIHAD SINNAOUR <mail@jihadsinnaour.com>
 * @link      : https://www.floatphp.com
 * @license   : MIT License
 */

namespace floatphp\Exceptions\Classes;

use Exception;

class XTPLException extends Exception
{
	/**
	 * @access protected
	 * custom message handler
	 */
	protected $error;

	/**
	 * @access protected
	 * custom error handler
	 */
	public function message()
	{
		$this->error = $this->getMessage();

		switch ($this->error)
		{
			case 'single':
				$this->error = 'Cannot use transformAll on single array, use transform instead';
				break;			

			case 'multiple':
				$this->error = 'Cannot use transform on multiple array, use transformAll instead';;
				break;
			
			default:
				$this->error = 'Unhandled exception';
				break;
		}
		return "Error : {$this->error}";
	}
}
