<?php
/* @var $this ClientiController */
/* @var $model Clienti */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clienti-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cognome'); ?>
		<?php echo $form->textField($model,'cognome',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cognome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'azienda'); ?>
		<?php echo $form->textField($model,'azienda',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'azienda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indirizzo'); ?>
		<?php echo $form->textField($model,'indirizzo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'indirizzo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cf'); ?>
		<?php echo $form->textField($model,'cf',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'piva'); ?>
		<?php echo $form->textField($model,'piva',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'piva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel2'); ?>
		<?php echo $form->textField($model,'tel2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tel2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->