<?php
namespace Library\Poof\Handlers\router;

class Route
{
	protected $_module = 'index';
	protected $_controller = 'index';
	protected $_action = 'index';
	
	public $parent;
	
	public function __construct($parent)
	{
		$this->parent = $parent;
	}
	
	public function run()
	{
		$action = $this->_action;
		
		$namespace = 'modules\\' . $this->_module . '\\controllers\\' . ucfirst($this->_controller);
		
		$controller = new $namespace($this);
	}
	
	public function getAction()
	{
		return $this->_action;
	}
	
	public function getViewFile()
	{
		return '../modules/' . $this->_module . '/views/' . $this->_controller . '/' . $this->_action . '.phtml';
	}
}