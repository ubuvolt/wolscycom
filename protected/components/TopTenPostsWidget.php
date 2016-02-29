<?php

class TopTenPostsWidget extends CWidget
{
    public function run()
    {
        $this->render('_topTenPosts', array('dataProvider' => $this->getTopTen() ));
    }
   
    protected function getTopTen()
    {
//        $dataProvider=new CActiveDataProvider('Articles', array(
//            'criteria'=>array(
//            'order'=>'id DESC',
//            'limit'=>10,
//            ),
//            'pagination' => array('pageSize' => 10,),
//            'totalItemCount' => 10,
//        ));
//
//
//        return $dataProvider;

        $criteria = new CDbCriteria();
        $criteria->limit = 30;
        $criteria->order = 'id DESC';


        return Articles::model()->findAll($criteria);
    }
}