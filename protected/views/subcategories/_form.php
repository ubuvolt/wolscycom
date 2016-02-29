<?php
/* @var $this SubcategoriesController */
/* @var $model Subcategories */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subcategories-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
    
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textField($model,'categ_name', 
                        array('value'=>$categ_name, 'disabled'=>'disabled', 'style'=>'width:120px')); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'subcateg'); ?>
		<?php echo $form->textField($model,'subcateg', array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'subcateg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo CHtml::dropDownList('priority', $model, Categories::$priority ) ?>
            	<?php echo $form->error($model,'priority'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->