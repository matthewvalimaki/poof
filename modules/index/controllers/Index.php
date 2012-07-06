<?php
namespace modules\index\controllers;

use library\poof\controllers;

class Index extends controllers\ControllerAbstract
{
	public function index()
	{
		$user = $this->_newUserContainer();
		$user->setFirstName();
	}
}