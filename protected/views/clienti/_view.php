<?php
/* @var $this ClientiController */
/* @var $data Clienti */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cognome')); ?>:</b>
	<?php echo CHtml::encode($data->cognome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('azienda')); ?>:</b>
	<?php echo CHtml::encode($data->azienda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indirizzo')); ?>:</b>
	<?php echo CHtml::encode($data->indirizzo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cf')); ?>:</b>
	<?php echo CHtml::encode($data->cf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('piva')); ?>:</b>
	<?php echo CHtml::encode($data->piva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel2')); ?>:</b>
	<?php echo CHtml::encode($data->tel2); ?>
	<br />

	*/ ?>

</div>