<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// ./yiic teea

class ArticlesCommand extends CConsoleCommand
{
    
    public function actionIndex()
    {
        // select * from articles;
        
        $articles = Articles::model()->findAll();
        
        // select * from articles where categ = sql and groups = basic;
        
        $articles = Articles::model()->findAllByAttributes( 
                array( 
                    'categ' => 'sql',
                    'groups' => 'basic',
                    ) );
        
        $sql = 'select * from articles where id = 12';
        $articles = Articles::model()->findBySQL($sql);

        $pk = 12;
        
        $articles = Articles::model()->findByPk($pk);
        
        print 'Art id: ' . $articles->id . ' ' . PHP_EOL
                .'title: ' . $articles->title . PHP_EOL;
    }
    
}