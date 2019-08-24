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

namespace floatPHP\Exceptions\Classes;

use \Exception;

class FileException extends Exception
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
			case 'notfound':
				$this->error = 'Cannot find requested Xtpl template file';
				break;

			case 'unreadable':
				$this->error = 'Unable to read Xtpl template file, please check permission';
				break;
			
			default:
				$this->error = 'Unhandled exception';
				break;
		}
		return "Error : {$this->error}";
	}
}
