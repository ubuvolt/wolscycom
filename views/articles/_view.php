<?php
/* @var $this ArticlesController */
/* @var $data Articles */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('groups')); ?>:</b>
	<?php echo CHtml::encode($data->groups); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('result')); ?>:</b>
	<?php echo CHtml::encode($data->result); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('writer')); ?>:</b>
	<?php echo CHtml::encode($data->writer); ?>
	<br />

	*/ ?>

</div>