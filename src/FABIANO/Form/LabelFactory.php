<?php
namespace FABIANO\Form;

class LabelFactory extends AbstractFActory
{
	public function createField()
	{
		return new \FABIANO\Form\Tipo\Label();
	}
	
}