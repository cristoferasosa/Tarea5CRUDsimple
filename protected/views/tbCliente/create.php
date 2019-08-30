<?php
/* @var $this TbClienteController */
/* @var $model TbCliente */

$this->breadcrumbs=array(
	'Tb Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbCliente', 'url'=>array('index')),
	array('label'=>'Manage TbCliente', 'url'=>array('admin')),
);
?>

<h1>Create TbCliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>