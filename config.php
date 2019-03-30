<?php
/**
 * Created by PhpStorm.
 * User: Kason
 * Date: 2019/3/30
 * Time: 11:20
 */

spl_autoload_register(function($class_name){
    require str_replace('\\','/',$class_name).'.php';
});