<?php
namespace Library\Poof\Controllers;
use Library\Poof\Views,
		Library\Poof\Containers;

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
		
		new Views\View($this);
	}
	
	public function getView()
	{
		return $this->view;
	}
	
	protected function _newContainer($type)
	{
		$containerName = 'Library\Poof\Containers\\' . ucfirst($type);

		return new $containerName();
	}
	
	protected function _addContainer($type)
	{
		$container = $this->_newContainer($type);
		
		if ($container->declareToView) {
			$var = strtolower($type);
			
			$this->view->$var = $container;
		}
		
		return $container;
	}
}