<style>
    .row_title{
        font-size: 20px;
        margin-bottom: 5px;
    }
    
    .row_content{
        font-size: 15px;
        margin-bottom: 5px;
        padding: 5px 0 5px 10px;
        background-color: #EFEFEF;
    }
    
    .row_code{
        font-size: 13px;
        margin-bottom: 5px;
        padding: 5px 0 5px 40px;
        background-color: #EFEFEF;
    }
    
    .row_result{
        font-size: 13px;
        margin-bottom: 5px;
        padding: 5px 0 5px 40px;
        background-color: #EFEFEF;
    }
</style>
<?php
/* @var $this ArticlesController */
/* @var $model Articles */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->title,
);

?>
<div class="row">
    <?php echo $model->create; ?>
    <?php echo $model->writer; ?>
</div>

<div class="row">
    <?php echo $model->categ; ?>
    <?php echo $model->groups; ?>
</div>

<div class="row_title">
    <?php Articles::clenHtmlTitle( $model->title ); ?>
</div>

<?php if($model->content): ?>
<div class="row_content">
    <?php Articles::clenHtmlContent( $model->content ); ?>
</div>
<?php endif;?>

<?php if($model->code): ?>
<div class="row_code">
    <?php Articles::clenHtmlContent( $model->code ); ?>
</div>
<?php endif;?>

<?php if($model->result): ?>
<div class="row_result">
    <?php Articles::clenHtmlContent( $model->result ); ?>
</div>
<?php endif;?>

<?php echo CHtml::link('Back',array('/articles/display')); ?>