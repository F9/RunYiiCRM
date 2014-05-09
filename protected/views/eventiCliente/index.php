<?php
/* @var $this EventiClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eventi Clientes',
);

$this->menu=array(
	array('label'=>'Create EventiCliente', 'url'=>array('create')),
	array('label'=>'Manage EventiCliente', 'url'=>array('admin')),
);
?>

<h1>Eventi Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
