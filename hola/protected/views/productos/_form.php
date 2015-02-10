<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_prod'); ?>
		<?php echo $form->textField($model,'id_prod'); ?>
		<?php echo $form->error($model,'id_prod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_prod'); ?>
		<?php echo $form->textField($model,'cod_prod'); ?>
		<?php echo $form->error($model,'cod_prod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_prod'); ?>
		<?php echo $form->textField($model,'descripcion_prod',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcion_prod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ventas_id_ventas'); ?>
		<?php echo $form->textField($model,'ventas_id_ventas'); ?>
		<?php echo $form->error($model,'ventas_id_ventas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->