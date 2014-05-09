<?php
/* @var $this EventiClienteController */
/* @var $model EventiCliente */

$this->breadcrumbs=array(
	'Eventi Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EventiCliente', 'url'=>array('index')),
	array('label'=>'Create EventiCliente', 'url'=>array('create')),
	array('label'=>'Update EventiCliente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EventiCliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EventiCliente', 'url'=>array('admin')),
);
?>

<h1>View EventiCliente #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_cliente',
		'data',
		'descrizione',
		'note',
	),
)); ?>
