<?php
/* @var $this SubcategoriesController */
/* @var $data Subcategories */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create')); ?>:</b>
	<?php echo CHtml::encode($data->create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modifi')); ?>:</b>
	<?php echo CHtml::encode($data->modifi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subcateg')); ?>:</b>
	<?php echo CHtml::encode($data->subcateg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categ_name')); ?>:</b>
	<?php echo CHtml::encode($data->categ_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priority')); ?>:</b>
	<?php echo CHtml::encode($data->priority); ?>
	<br />


</div>