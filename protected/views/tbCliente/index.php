<?php
/* @var $this TbClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Clientes',
);

$this->menu=array(
	array('label'=>'Create TbCliente', 'url'=>array('create')),
	array('label'=>'Manage TbCliente', 'url'=>array('admin')),
);
?>

<h1>Tb Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
