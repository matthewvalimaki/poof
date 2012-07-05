<?php
namespace modules\index\controllers;

use library\poof\controllers;

class Index extends controllers\ControllerAbstract
{
	public function index()
	{
		$this->view->first_name = 'matthew';
	}
}