<?php
/**
 * Created by PhpStorm.
 * User: Kason
 * Date: 2019/3/30
 * Time: 19:41
 */
namespace Sort;

/**
 * 选择排序
 * Class Select
 * @package Sort
 */
class Select
{
    /**
     * 选择排序方法
     * @param $arr  需要排序的数组
     * @return array
     */
    public static function main($arr)
    {
        $len = count($arr);
        for($i = 0; $i < $len; $i++){
            $min_index = $i;
            for($j = $i+1; $j < $len; $j++){
                if($arr[$min_index] > $arr[$j]){
                    $min_index = $j;
                }
            }
            if($min_index != $i){
                list($arr[$i], $arr[$min_index]) = [$arr[$min_index], $arr[$i]];
            }
        }
        return $arr;
    }
}