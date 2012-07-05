<?php
namespace Library\Poof\Handlers;

class Router extends HandlerAbstract
{
	public function init()
	{
		$this->_poof->addChildObject(new Request($this->_poof));
		
		$this->_route();
		
		return $this;
	}
	
	private function _route()
	{
		$request = $this->_poof->getChildObject('Library\Poof\Handlers\Request');

		$route = $request->getRoute();
		
		$route->run();
	}
}