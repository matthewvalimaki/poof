<?php
namespace Library\Poof\Controllers;
use Library\Poof\Views,
		library\poof\containers;

abstract class ControllerAbstract
{
	public $parent;
	protected $view;
	
	public function __construct($parent)
	{
		$this->parent = $parent;
		
		$this->_view = new \stdClass();
		
//		$this->init();
		
		$this->_runRequest();
	}
	
	protected function _runRequest()
	{
		$action = $this->parent->getAction();
		
		$this->$action();
		
		new views\View($this);
	}
	
	public function getView()
	{
		return $this->view;
	}
	
	protected function _newUserContainer()
	{
		$container = new User();
		
		if ($container->declareToView) {
			
		}
	}
}