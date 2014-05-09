<?php
/* @var $this EventiClienteController */
/* @var $model EventiCliente */

$this->breadcrumbs=array(
	'Eventi Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EventiCliente', 'url'=>array('index')),
	array('label'=>'Create EventiCliente', 'url'=>array('create')),
	array('label'=>'View EventiCliente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EventiCliente', 'url'=>array('admin')),
);
?>

<h1>Update EventiCliente <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>