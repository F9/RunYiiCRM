<?php
/* @var $this EventiClienteController */
/* @var $model EventiCliente */

$this->breadcrumbs=array(
	'Eventi Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EventiCliente', 'url'=>array('index')),
	array('label'=>'Manage EventiCliente', 'url'=>array('admin')),
);
?>

<h1>Create EventiCliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>