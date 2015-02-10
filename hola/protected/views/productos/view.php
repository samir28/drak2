<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	$model->id_prod,
);

$this->menu=array(
	array('label'=>'List Productos', 'url'=>array('index')),
	array('label'=>'Create Productos', 'url'=>array('create')),
	array('label'=>'Update Productos', 'url'=>array('update', 'id'=>$model->id_prod)),
	array('label'=>'Delete Productos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_prod),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Productos', 'url'=>array('admin')),
);
?>

<h1>View Productos #<?php echo $model->id_prod; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_prod',
		'cod_prod',
		'descripcion_prod',
		'ventas_id_ventas',
	),
)); ?>
