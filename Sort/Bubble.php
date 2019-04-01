<?php
/**
 * Created by PhpStorm.
 * User: Kason
 * Date: 2019/4/1
 * Time: 08:12
 */
namespace Sort;

/**
 * 冒泡排序算法
 * Class Bubble
 * @package Sort
 */
class Bubble
{
    /**
     * 冒泡排序算法
     * @param $arr
     * @return mixed
     */
    public static function main($arr)
    {
        $len = count($arr);
        do{
            $flag_last = 0;  // 用来记录最后一次交换的位置
            for($j = 1; $j < $len; $j++) {
                if($arr[$j - 1] > $arr[$j]) {
                    list($arr[$j - 1], $arr[$j]) = [$arr[$j], $arr[$j - 1]];
                    $flag_last = $j;  // 用来记录最后一次交换位置
                }
            }
            $len = $flag_last;
        }while($flag_last > 0);
        return $arr;
    }
}