<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php Yii::app()->bootstrap->register(); ?>
<div class="container" id="page">

	<div id="header">
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/php.jpg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/java.jpg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/ruby.jpeg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/phpunit.jpeg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sql.jpg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/html4.jpg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/css.jpg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/html5.jpg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/ajax.jpg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/ubuntu.jpeg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/postgres.jpg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/Smarty.jpg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/jQuery.jpg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/yii_framework.jpg'); ?>
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/codeig.png'); ?>
	</div><!-- header -->
        
        <div id="mainmenu">
            <?php 
                $menu = new Menu();
            
                $menu->displayMainMenu($this);
            ?>
     	</div>
        
        
        <div id="mainmenu">
        <?php
            if( isset( $_GET['categ'] ) )
            {
                $menu->displayMainSubMenu($this, $_GET['categ']);
            }
        ?>
        </div>

        <?php

        $s1 = 'https://www.designwebring.com/wp-content/uploads/2014/07/php-mysql.jpg';
        $s2 = 'http://2.bp.blogspot.com/-Ly-B5wXpoC8/Uym5w51K-QI/AAAAAAAAAAM/1XoF9_v3mUw/s1600/php+training+in+chandigarh.jpg';
        $s3 = 'http://projects.kurinjiemedia.com/km/wp-content/uploads/2014/11/php-banner.jpg';
        $s4 = 'http://gcdn.indiabizclub.com/upload15/axmagi1ozqax9z03qrt/cake-php-and-code-ignitor-2743997434.jpg';
        $s5 = 'https://duogeek.com/wp-content/uploads/2015/02/WordPress-plugin.jpg';

        $this->widget('application.extensions.slider.Slider',array(
            'items'=>array(
                array($s1, 'image1'),
                array($s2, 'image2'),
                array($s3, 'image3'),
                array($s4, 'image3'),
                array($s5, 'image3'),
            ),
            'options'=>array(
                'speed'=>'3000',
            ),
        )); ?>


        <div id="mainmenu">
            <?php $itemsSet = array(
                            array('label'=>'Articles', 'url'=>array('/articles/create'), 'visible'=>!Yii::app()->user->isGuest),                            
                            array('label'=>'Categories', 'url'=>array('/categories/create'), 'visible'=>!Yii::app()->user->isGuest),                            
                    ); 

            if(isset($_GET['categ']))
            {
                $subcategories = array(array('label'=>'Subcategories', 
                    'url'=>array('/subcategories/create&categ='.$_GET['categ']), 'visible'=>!Yii::app()->user->isGuest));
                $itemsSet = array_merge ($itemsSet, $subcategories);

            }
            ?>

            <?php $this->widget('zii.widgets.CMenu', array('items' => $itemsSet) ); ?>
	</div>



        <?php if( empty($_GET) ) : ;?>
        <?php $this->widget('TopTenPostsWidget'); ?>
        <?php endif; ?>
        <?php if( $_GET['r']=='site/index' ) : ;?>
        <?php $this->widget('TopTenPostsWidget'); ?>
        <?php endif; ?>




	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
	<div class="clear"></div>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Wolscy.com.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
</div><!-- page -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- FirstAdd -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3668401158155437"
     data-ad-slot="8118560508"
     data-ad-format="auto"></ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>
</html>