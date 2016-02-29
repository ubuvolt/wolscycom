<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Menu extends CComponent
{
    /**
     * Method display main menu
     * 
     * @param ogject $thi
     * @return boolean or menu
     */
    public function displayMainMenu($thi)
    {
        $items []= array('label'=>'Home', 'url'=>array('/site/index') ) ;
        $items []= array('label'=>'', 'url'=>array('#') );

        if( ( $model = Categories::getAllCategs() ) !== false )
        {
            foreach ($model as $v) 
            {
                $items [] = array('label'=>strtoupper( $v ), 'url'=>array('articles/display&categ=' . $v));
            }

            $items []= array('label'=>'', 'url'=>array('#') );
            $items []= array('label'=>'Contact', 'url'=>array('/site/contact') );

            $items []= array('label'=>'', 'url'=>array('#') );
            $items []= array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest);
            $items []= array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest );
            
            $thi->widget('zii.widgets.CMenu', array('items'=> $items,));
            
        } else {
            
            return false;
        }        
    }

    /**
     * Method display main submenu
     * 
     * @param object $thi
     * @param string $categ categ name
     * @return boolean or menu
     */
    public function displayMainSubMenu($thi, $categ)
    {
        $items = array();

        if( ( $model = Subcategories::getAllSubCategs($categ) ) !== false )
        {
            foreach ($model as $sv) 
            {
                $items [] = array(
                    'label'=>strtoupper( $sv ), 
                    'url'=>array('/articles/display&categ='.$categ
                    .'&subcateg='.$sv));               
            }

            $thi->widget('zii.widgets.CMenu', array('items'=> $items,));
            
        } else {
            
            return false;
        } 
    }
}