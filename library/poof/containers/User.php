<?php
namespace Library\Poof\Containers;

class User extends ContainerAbstract
{
	public $declareToView = true;
	
	protected $_firstName;
	
	public function setFirstName($data)
	{
		$this->_firstName = $data;
		
		return $this;
	}
	
	public function getFirstName()
	{
		return $this->_firstName;
	}
}