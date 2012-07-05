<?php
namespace Library\Poof\Formatter;

abstract class FormatterAbstract
{
	protected $_string = '';
	protected $_object;
	
	public function __construct($object)
	{
		$this->_object = $object;
	}
	
	protected function _getPropertySummary()
	{
		$list = '';
		foreach (get_object_vars($this->_object) as $var) {
			 
		 }
		 
		 return $list;
	}
}