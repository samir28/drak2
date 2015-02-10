<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	$model->id_prod=>array('view','id'=>$model->id_prod),
	'Update',
);

$this->menu=array(
	array('label'=>'List Productos', 'url'=>array('index')),
	array('label'=>'Create Productos', 'url'=>array('create')),
	array('label'=>'View Productos', 'url'=>array('view', 'id'=>$model->id_prod)),
	array('label'=>'Manage Productos', 'url'=>array('admin')),
);
?>

<h1>Update Productos <?php echo $model->id_prod; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>