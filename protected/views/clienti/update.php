<?php
/* @var $this ClientiController */
/* @var $model Clienti */

$this->breadcrumbs=array(
	'Clientis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clienti', 'url'=>array('index')),
	array('label'=>'Create Clienti', 'url'=>array('create')),
	array('label'=>'View Clienti', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Clienti', 'url'=>array('admin')),
);
?>

<h1>Update Clienti <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>