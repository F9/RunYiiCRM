<?php
/* @var $this ClientiController */
/* @var $model Clienti */

$this->breadcrumbs=array(
	'Clientis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clienti', 'url'=>array('index')),
	array('label'=>'Manage Clienti', 'url'=>array('admin')),
);
?>

<h1>Create Clienti</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>