<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_prod'); ?>
		<?php echo $form->textField($model,'id_prod'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_prod'); ?>
		<?php echo $form->textField($model,'cod_prod'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_prod'); ?>
		<?php echo $form->textField($model,'descripcion_prod',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ventas_id_ventas'); ?>
		<?php echo $form->textField($model,'ventas_id_ventas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->