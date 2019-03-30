<?php
/**
 * Created by PhpStorm.
 * User: Kason
 * Date: 2019/3/30
 * Time: 08:38
 */
namespace Helper;

class Sort
{
    /**
     * 生成随机数组
     * @param int $len 需要生成的数组的长度
     * @param int $max  生成数组的最大值
     * @param int $min  生成数组的中最小值
     * @return array  返回生成的数组
     */
    public static function generateArray(int $len, int $max, $min=0)
    {
        $arr = [];
        for( $i = 0; $i < $len; $i++) {
            $arr[$i] = rand($min, $max);
        }
        return $arr;
    }

    /**
     * 生成近有序的一个数组
     * @param int $len   需要生成的数组的长度
     * @param int $swap_times 需要调整的数次数
     * @return array
     */
    public static function generateNearArray(int $len, int $swap_times)
    {
        $arr = [];
        for ($i = 0; $i<$len; $i++) {
            $arr[$i]= $i;
        }

        for($j = 0; $j < $swap_times; $j++) {
            $t1= rand(1,$len) - 1;
            $t2 = rand(1,$len) - 1;
            list($arr[$t1],$arr[$t2]) = [$arr[$t2],$arr[$t1]];
        }
        return $arr;
    }
}