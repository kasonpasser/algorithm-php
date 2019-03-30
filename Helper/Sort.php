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
     * @return array 生成的数组
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

    /**
     * 测试排序的情况
     * @param $function_name  函数名
     * @param $arr  要排序的数组
     */
    public static function testArray($function_name,$arr)
    {
        $start = self::microtimeFloat();
        $sort_arr = call_user_func($function_name,$arr);
        $end = self::microtimeFloat();
        if(!self::verifySort($sort_arr)){
            die('排序出错，没有正确排序');
        }
        echo sprintf("%s\t数组长度%s\t用时：%s",$function_name,count($arr),($end - $start)).PHP_EOL;
    }

    /**
     * 生成时间
     * @return float
     */
    public static function microtimeFloat()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }

    /**
     * 验证数组是否已经是有序的数组
     * @param $arr
     * @return bool
     */
    public static function verifySort($arr)
    {
        $len = count($arr);
        for($i = 1; $i < $len; $i++){
            if($arr[$i-1] > $arr[$i]){
                return false;
            }
        }
        return true;
    }

}