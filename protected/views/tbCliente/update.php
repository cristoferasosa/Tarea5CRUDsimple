<?php
/* @var $this TbClienteController */
/* @var $model TbCliente */

$this->breadcrumbs=array(
	'Tb Clientes'=>array('index'),
	$model->Id_cliente=>array('view','id'=>$model->Id_cliente),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbCliente', 'url'=>array('index')),
	array('label'=>'Create TbCliente', 'url'=>array('create')),
	array('label'=>'View TbCliente', 'url'=>array('view', 'id'=>$model->Id_cliente)),
	array('label'=>'Manage TbCliente', 'url'=>array('admin')),
);
?>

<h1>Update TbCliente <?php echo $model->Id_cliente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>