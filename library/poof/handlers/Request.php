<?php
namespace Library\Poof\Handlers;

class Request extends HandlerAbstract
{
	protected $_routes = array();
	
	public function init()
	{
		
	}
	
	public function getRoute()
	{
		if (count($_GET) === 0) {
			$route = new router\Route($this);
		}
		
		$this->_addRoute($route);
		
		return $route;
	}
	
	private function _addRoute($route)
	{
		$this->_routes[] = $route;
		
		return $this;
	}
}