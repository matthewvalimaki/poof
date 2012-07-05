<?php
namespace Library\Poof\Handlers;

abstract class HandlerAbstract implements HandlerInterface
{
	protected $_poof;
	
	public function __construct($poof)
	{
		$this->_poof = $poof;
		
		$this->init();
	}
}