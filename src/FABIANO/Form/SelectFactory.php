<?php
namespace FABIANO\Form;

class SelectFactory extends AbstractFActory
{
	public function createField()
	{
		return new \FABIANO\Form\Tipo\Select();
	}
	
}