<?php
/* @var $this SubcategoriesController */
/* @var $model Subcategories */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create'); ?>
		<?php echo $form->textField($model,'create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modifi'); ?>
		<?php echo $form->textField($model,'modifi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subcateg'); ?>
		<?php echo $form->textField($model,'subcateg',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categ_name'); ?>
		<?php echo $form->textField($model,'categ_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'priority'); ?>
		<?php echo $form->textField($model,'priority'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->