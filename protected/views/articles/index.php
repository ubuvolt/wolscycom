<?php

$this->widget('zii.widgets.grid.CGridView', array(
'id'=>'reports-grid',
'dataProvider'=>$model,
'columns'=>array(
    array(
        'name'  => 'Id',
        'type'  => 'raw',
        'value' => '$data->id',
        ),
    array(
        'name'  => 'Articles',
        'type'  => 'raw',
        'value' => 'CHtml::link( htmlentities( $data->title ),array("articles/singleView&id=$data->id") )',
        ),
    array(
        'name'  => 'Create',
        'type'  => 'raw',
        'value' => '$data->create',
        ),
    array(
        'name'  => 'Writer',
        'type'  => 'raw',
        'value' => '$data->writer',
        ),
    ),
));
?>