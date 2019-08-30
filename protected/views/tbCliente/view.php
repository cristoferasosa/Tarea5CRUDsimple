<?php
/* @var $this TbClienteController */
/* @var $model TbCliente */

$this->breadcrumbs=array(
	'Tb Clientes'=>array('index'),
	$model->Id_cliente,
);

$this->menu=array(
	array('label'=>'List TbCliente', 'url'=>array('index')),
	array('label'=>'Create TbCliente', 'url'=>array('create')),
	array('label'=>'Update TbCliente', 'url'=>array('update', 'id'=>$model->Id_cliente)),
	array('label'=>'Delete TbCliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id_cliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbCliente', 'url'=>array('admin')),
);
?>

<h1>View TbCliente #<?php echo $model->Id_cliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id_cliente',
		'NombreCompleto',
		'Mes_Aporte',
		'Cantidad_Aporte',
	),
)); ?>
