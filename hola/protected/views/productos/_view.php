<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prod')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_prod), array('view', 'id'=>$data->id_prod)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_prod')); ?>:</b>
	<?php echo CHtml::encode($data->cod_prod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_prod')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_prod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ventas_id_ventas')); ?>:</b>
	<?php echo CHtml::encode($data->ventas_id_ventas); ?>
	<br />


</div>