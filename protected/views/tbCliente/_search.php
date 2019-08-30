<?php
/* @var $this TbClienteController */
/* @var $model TbCliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id_cliente'); ?>
		<?php echo $form->textField($model,'Id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NombreCompleto'); ?>
		<?php echo $form->textField($model,'NombreCompleto',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Mes_Aporte'); ?>
		<?php echo $form->textField($model,'Mes_Aporte',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cantidad_Aporte'); ?>
		<?php echo $form->textField($model,'Cantidad_Aporte',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->