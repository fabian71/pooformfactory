<?php
namespace FABIANO\Form;

class SubmitFactory extends AbstractFActory
{
	public function createField()
	{
		return new \FABIANO\Form\Tipo\Submit();
	}
	
}