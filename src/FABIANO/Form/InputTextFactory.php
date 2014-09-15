<?php
namespace FABIANO\Form;

class InputTextFactory extends AbstractFActory
{
	public function createField()
	{
		return new \FABIANO\Form\Tipo\InputText();
	}
	
}