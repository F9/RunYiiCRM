<?php
/* @var $this ClientiController */
/* @var $model Clienti */

$this->breadcrumbs=array(
	'Clientis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Clienti', 'url'=>array('index')),
	array('label'=>'Create Clienti', 'url'=>array('create')),
	array('label'=>'Update Clienti', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Clienti', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clienti', 'url'=>array('admin')),
);
?>

<h1>View Clienti #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'cognome',
		'azienda',
		'telefono',
		'email',
		'indirizzo',
		'cf',
		'piva',
		'tel2',
	),
)); ?>

<hr />
<?php foreach($model->eventiClientes as $event): ?>
	<h3><?=$event->descrizione ?> </h3>
	
<?php endforeach; ?>
