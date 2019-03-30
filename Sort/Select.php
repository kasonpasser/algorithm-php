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
            for($j = $i+1; $j < $len; $j++){
                if($arr[$i] > $arr[$j]){
                    list($arr[$i], $arr[$j]) = [$arr[$j], $arr[$i]];
                }
            }
        }
        return $arr;
    }
}