<?php
/* @var $this VentasController */
/* @var $model Ventas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ventas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_venta'); ?>
		<?php echo $form->textField($model,'id_venta'); ?>
		<?php echo $form->error($model,'id_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_venta'); ?>
		<?php #echo $form->textField($model,'fecha_venta');
$this-> widget('zii.widgets.jui.CJuiDatePicker',
	array(

		'model'=> $model,
		'attribute'=> 'fecha_venta',
		'language'=> 'es',
		'options'=> array(

			'dateformat'=> 'yy-mm-dd',
			'constrainInput'=> false,
			'duration'=> 'fast',
			'showAnim'=> 'slide'
			),

		)

	);

	?>

		<?php echo $form->error($model,'fecha_venta'); ?>
	
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto_fecha'); ?>
		<?php echo $form->textField($model,'monto_fecha');?>
		<?php echo $form->error($model,'monto_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clientes_id_clientes'); ?>
		<?php echo $form->textField($model,'clientes_id_clientes'); ?>
		<?php echo $form->error($model,'clientes_id_clientes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->