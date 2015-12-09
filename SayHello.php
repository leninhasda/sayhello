<?php 
namespace leninhasda\hello;
/**
* @author  	leninhasda
* @version 	1.0.0
* @link 	http://leninhasda.me
*/

/**
* just a hello class
*/
class SayHello
{
	private $message;
	function __construct($args = null)
	{
		$this->message = $args;
	}

	public function setMsg($args)
	{
		$this->message = $args;
	}

	public function sayIt()
	{
		echo $this->message;
	}
}