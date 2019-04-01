<?php
/**
 * Created by PhpStorm.
 * User: Kason
 * Date: 2019/3/30
 * Time: 19:41
 */
namespace Sort;

/**
 * 插入排序
 *     把一个数插入到一个有序的数组当中
 * Class Insert
 * @package Sort
 */
class Insert
{
    /**
     * 插入排序
     * @param $arr
     * @return mixed
     */
    public static function main($arr)
    {
        $len = count($arr);
        for( $i=1; $i < $len; $i++){
            $tmp = $arr[$i];
            for($j = $i; $j > 0; $j--){
                if($arr[$j-1] > $tmp){
                    $arr[$j] = $arr[$j-1];
                   // list($arr[$j-1], $arr[$j]) = [$arr[$j], $arr[$j-1]];
                }
                else {    // 提前结束循环。对于偏于有序的数组速度会有所提升
                    $arr[$j] = $tmp;
                    break;
                }
            }
        }
        return $arr;
    }
}