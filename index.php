<?php
/**
 * Created by PhpStorm.
 * User: Kason
 * Date: 2019/3/30
 * Time: 11:21
 */
require_once "config.php";

$arr = Helper\Sort::generateArray(10000,100);

Helper\Sort::testArray('Sort\\Select::main',$arr);


