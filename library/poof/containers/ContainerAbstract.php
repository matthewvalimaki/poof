<?php
namespace Library\Poof\Containers;

abstract class ContainerAbstract
{
	public $parent;
	
	public $declareToView = false;
}