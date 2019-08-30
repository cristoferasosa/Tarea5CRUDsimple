<?php
/* @var $this TbClienteController */
/* @var $data TbCliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_cliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id_cliente), array('view', 'id'=>$data->Id_cliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombreCompleto')); ?>:</b>
	<?php echo CHtml::encode($data->NombreCompleto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mes_Aporte')); ?>:</b>
	<?php echo CHtml::encode($data->Mes_Aporte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cantidad_Aporte')); ?>:</b>
	<?php echo CHtml::encode($data->Cantidad_Aporte); ?>
	<br />


</div>