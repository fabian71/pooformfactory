<?php
//http://pooformfactory.dev:8080/
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

// Configurando o autoload
define('CLASS_DIR','../src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$di = require '../scripts/instance.php';
$di->set('request',new \FABIANO\Form\Request());
$di->set('validator',new \FABIANO\Form\Validator());

$form = new \FABIANO\Form\GeraForm($di);

$form->setAction('mailto:teste@teste.com');
$form->setMetodo('GET');

$campoLabel = new \FABIANO\Form\LabelFactory();
$campo = $campoLabel->createField();
$campo->setLabel('Nome')
      ->setStyle('display:block');
$form->addField($campo);

$campoNome = new \FABIANO\Form\InputTextFactory();
$campo = $campoNome->createField();
$campo->setType('text')
	  ->setId('nome')
	  ->setPlaceholder('seu nome');
$form->addField($campo);

$campoLabel = new \FABIANO\Form\LabelFactory();
$campo = $campoLabel->createField();
$campo->setLabel('Email')
	  ->setStyle('display:block');
$form->addField($campo);

$campoEmail = new \FABIANO\Form\InputTextFactory();
$campo = $campoEmail->createField();
$campo->setType('text')
	  ->setId('email')
	  ->setPlaceholder('seu email');
$form->addField($campo);

$campoLabel = new \FABIANO\Form\LabelFactory();
$campo = $campoLabel->createField();
$campo->setLabel('Estado')
	  ->setStyle('display:block');
$form->addField($campo);

$campoEstado = new \FABIANO\Form\SelectFactory();
$campo = $campoEstado->createField();
$campo->setId('estado')
	  ->setOption(array("pr" => "Parana", "sc" => "Santa Catarina", "sp" => "Sao Paulo"))
	  ->setSelected('sp')
	  ->setName('Estados');
$form->addField($campo);	  

$campoSubmit = new \FABIANO\Form\SubmitFactory();
$campo = $campoSubmit->createField();
$campo->setType('submit')
	  ->setValue('Enviar formulário')
	  ->setStyle('display:block; clear:both; margin:10px 0 0 0');
$form->addField($campo);

$campoReset = new \FABIANO\Form\ResetFactory();
$campo = $campoReset->createField();
$campo->setType('reset')
	  ->setValue('Apagar')
	  ->setStyle('display:block; clear:both; margin:10px 0 0 0');
$form->addField($campo);

$form->render();
