<?php
/* @var $this VentasController */
/* @var $model Ventas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_venta'); ?>
		<?php echo $form->textField($model,'id_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_venta'); ?>
		<?php echo $form->textField($model,'fecha_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto_fecha'); ?>
		<?php echo $form->textField($model,'monto_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientes_id_clientes'); ?>
		<?php echo $form->textField($model,'clientes_id_clientes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->