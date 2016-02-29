<?php
/* @var $this CategoriesController */
/* @var $data Categories */
print_r ($_REQUEST);

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

	<b><?php echo CHtml::encode($data->getAttributeLabel('categ')); ?>:</b>
	<?php echo CHtml::encode($data->categ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priority')); ?>:</b>
	<?php echo CHtml::encode($data->priority); ?>
	<br />


</div>