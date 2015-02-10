<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id_cliente,
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Crear Clientes', 'url'=>array('create')),
	array('label'=>'Actualizar Clientes', 'url'=>array('update', 'id'=>$model->id_cliente)),
	array('label'=>'Eliminar Clientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h1>View Clientes #<?php echo $model->id_cliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cliente',
		'nombre',
		'apellido',
	),
)); ?>
