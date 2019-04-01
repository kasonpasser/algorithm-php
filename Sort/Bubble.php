<?php
/**
 * Created by PhpStorm.
 * User: Kason
 * Date: 2019/4/1
 * Time: 08:12
 */
namespace Sort;

class Bubble
{
    public static function main($arr)
    {
        $len = count($arr);
        do{
            for($j = 1; $j < $len; $j++){
                if($arr[$j - 1] > $arr[$j]){
                    list($arr[$j - 1], $arr[$j]) = [$arr[$j], $arr[$j - 1]];
                }
            }
            $len --;
        }while($len > 0);

//        for($i = 0; $i < $len; $i++) {
//            $t = $len - $i -1;
//            for($j = 0 ; $j < $t; $j++) {
//                if($arr[$j] > $arr[$j + 1]) {
//                    list($arr[$j + 1], $arr[$j]) = [$arr[$j], $arr[$j + 1]];
//                }
//            }
//        }
        return $arr;
    }
}