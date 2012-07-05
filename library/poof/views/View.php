<?php
namespace Library\Poof\Views;

class View
{
	public $parent;
	
	public function __construct($parent)
	{
		$this->parent = $parent;
		
		$this->_processView();
	}
	
	private function _processView()
	{
		$action = $this->parent->parent->getAction();
		
		extract(array_merge(array(
			'route' => $this->parent->parent
		), (array) $this->parent->getView()));
		
		include $this->parent->parent->getViewFile();
	}
}