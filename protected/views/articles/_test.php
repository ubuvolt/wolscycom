<?php

if( ! $data instanceof Articles)
{

    foreach ($data as $d)
    {
        print $d->id . '<br />';
        print $d->create . '<br />';
        print $d->modifi . '<br />';
        print $d->categ . '<br />';
        print $d->groups . '<br />';
        print $d->title . '<br />';
        print $d->content . '<br />';
        print $d->code . '<br />';
        print $d->result . '<br />';
        print $d->writer . '<br />';
        print ' ------ <br />';

    }
} 

if( $data instanceof Articles)
{
   $d = $data;
   print $d->id . '<br />';
   print $d->create . '<br />';
   print $d->modifi . '<br />';
   print $d->categ . '<br />';
   print $d->groups . '<br />';
   print $d->title . '<br />';
   print $d->content . '<br />';
   print $d->code . '<br />';
   print $d->result . '<br />';
   print $d->writer . '<br />';
   print ' ------ <br />';
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo ''mariola;