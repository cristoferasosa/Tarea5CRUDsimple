<?php
/* @var $this TbClienteController */
/* @var $model TbCliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tb-cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreCompleto'); ?>
		<?php echo $form->textField($model,'NombreCompleto',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'NombreCompleto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mes_Aporte'); ?>
		<?php echo $form->textField($model,'Mes_Aporte',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Mes_Aporte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cantidad_Aporte'); ?>
		<?php echo $form->textField($model,'Cantidad_Aporte',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Cantidad_Aporte'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->