<?php
/* @var $this VentasController */
/* @var $data Ventas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_venta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_venta), array('view', 'id'=>$data->id_venta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_venta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->monto_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientes_id_clientes')); ?>:</b>
	<?php echo CHtml::encode($data->clientes_id_clientes); ?>
	<br />


</div>