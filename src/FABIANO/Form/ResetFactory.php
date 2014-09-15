<?php
namespace FABIANO\Form;

class ResetFactory extends AbstractFActory
{
	public function createField()
	{
		return new \FABIANO\Form\Tipo\ResetForm();
	}
	
}