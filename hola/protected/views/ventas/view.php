<?php
/* @var $this VentasController */
/* @var $model Ventas */

$this->breadcrumbs=array(
	'Ventases'=>array('index'),
	$model->id_venta,
);

$this->menu=array(
	array('label'=>'List Ventas', 'url'=>array('index')),
	array('label'=>'Create Ventas', 'url'=>array('create')),
	array('label'=>'Update Ventas', 'url'=>array('update', 'id'=>$model->id_venta)),
	array('label'=>'Delete Ventas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_venta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ventas', 'url'=>array('admin')),
);
?>

<h1>View Ventas #<?php echo $model->id_venta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_venta',
		'fecha_venta',
		'monto_fecha',
		'clientes_id_clientes',
	),
)); ?>
