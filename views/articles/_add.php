<?php
/* @var $this ArticlesController */
/* @var $model Articles */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'articles-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'create'); ?>
        <?php echo $form->textField($model,'create'); ?>
        <?php echo $form->error($model,'create'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'modifi'); ?>
        <?php echo $form->textField($model,'modifi'); ?>
        <?php echo $form->error($model,'modifi'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'categ'); ?>
        <?php echo $form->textField($model,'categ'); ?>
        <?php echo $form->error($model,'categ'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'groups'); ?>
        <?php echo $form->textField($model,'groups'); ?>
        <?php echo $form->error($model,'groups'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'title'); ?>
        <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'content'); ?>
        <?php echo $form->textField($model,'content',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'content'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'code'); ?>
        <?php echo $form->textField($model,'code',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'code'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'result'); ?>
        <?php echo $form->textField($model,'result',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'result'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'writer'); ?>
        <?php echo $form->textField($model,'writer'); ?>
        <?php echo $form->error($model,'writer'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->