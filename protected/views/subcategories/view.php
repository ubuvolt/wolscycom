<?php
/* @var $this SubcategoriesController */
/* @var $model Subcategories */

$this->breadcrumbs=array(
	'Subcategories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Subcategories', 'url'=>array('index')),
	array('label'=>'Create Subcategories', 'url'=>array('create')),
	array('label'=>'Update Subcategories', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Subcategories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subcategories', 'url'=>array('admin')),
);
?>

<h1>View Subcategories #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'create',
		'modifi',
		'subcateg',
		'categ_name',
		'priority',
	),
)); ?>
