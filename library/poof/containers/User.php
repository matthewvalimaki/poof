<?php
namespace Library\Poof\Containers;

class User extends ContainerAbstract
{
	public $declareToView = true;
	
	public function setFirstName($data)
	{
		$this->_firstName = $data;
		
		return $this;
	}
}