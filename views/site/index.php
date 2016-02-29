<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h3>
<?php print User::getUserInfo( Yii::app()->user->id ); ?>
</h3>

