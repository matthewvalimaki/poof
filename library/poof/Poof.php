<?php
namespace Library\Poof;

use Library\Poof\Formatter;

class Poof
{
	const VERSION = '0.0.1';
	
	protected $_childObjects = array();
	
	public function __construct()
	{
		$this->_init();
	}
	
	protected function _init()
	{
		$this->addChildObject(new Handlers\Router($this));
		
		return $this;
	}
	
	public function addChildObject($object)
	{
		$this->_childObjects[get_class($object)] = $object;
		
		return $this;
	}
	
	public function getChildObject($name)
	{
		return $this->_childObjects[$name];
	}
	
	public function __toString()
	{
		return (string) new Formatter\Html($this);
	}
}