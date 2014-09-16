<?php
//http://pooformfactory.dev:8080/
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

// Configurando o autoload
define('CLASS_DIR','../src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

//$di = require '../scripts/instance.php';
//$di->set('request',new \FABIANO\Form\Request());

$request = new \FABIANO\Form\Request();

$validator = new \FABIANO\Form\Validator($request);

$form = new \FABIANO\Form\GeraForm($validator);

$form->setAction('mailto:teste@teste.com');
$form->setMetodo('GET');

$campoLabel = new \FABIANO\Form\LabelFactory();
$campo = $campoLabel->newField();
$campo->setLabel('Nome')
      ->setStyle('display:block');
$form->createField($campo);

$campoNome = new \FABIANO\Form\InputTextFactory();
$campo = $campoNome->newField();
$campo->setType('text')
	  ->setId('nome')
	  ->setPlaceholder('seu nome');
$form->createField($campo);

$campoLabel = new \FABIANO\Form\LabelFactory();
$campo = $campoLabel->newField();
$campo->setLabel('Email')
	  ->setStyle('display:block');
$form->createField($campo);

$campoEmail = new \FABIANO\Form\InputTextFactory();
$campo = $campoEmail->newField();
$campo->setType('text')
	  ->setId('email')
	  ->setPlaceholder('seu email');
$form->createField($campo);

$campoLabel = new \FABIANO\Form\LabelFactory();
$campo = $campoLabel->newField();
$campo->setLabel('Estado')
	  ->setStyle('display:block');
$form->createField($campo);

$campoEstado = new \FABIANO\Form\SelectFactory();
$campo = $campoEstado->newField();
$campo->setId('estado')
	  ->setOption(array("pr" => "Parana", "sc" => "Santa Catarina", "sp" => "Sao Paulo"))
	  ->setSelected('sp')
	  ->setName('Estados');
$form->createField($campo);	  

$campoSubmit = new \FABIANO\Form\SubmitFactory();
$campo = $campoSubmit->newField();
$campo->setType('submit')
	  ->setValue('Enviar formulário')
	  ->setStyle('display:block; clear:both; margin:10px 0 0 0');
$form->createField($campo);

$campoReset = new \FABIANO\Form\ResetFactory();
$campo = $campoReset->newField();
$campo->setType('reset')
	  ->setValue('Apagar')
	  ->setStyle('display:block; clear:both; margin:10px 0 0 0');
$form->createField($campo);

$form->render();
