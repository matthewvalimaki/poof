<?php
namespace modules\index\controllers;

use library\poof\controllers;

class Index extends controllers\ControllerAbstract
{
	public function index()
	{
		$user = $this->_addContainer('user');
		$user->setFirstName('test');
	}
}