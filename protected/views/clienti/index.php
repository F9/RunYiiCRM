<?php
/* @var $this ClientiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clientis',
);

$this->menu=array(
	array('label'=>'Create Clienti', 'url'=>array('create')),
	array('label'=>'Manage Clienti', 'url'=>array('admin')),
);
?>

<h1>Clientis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
