<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 2018/4/28
 * Time: 17:24
 */

/**
 * 生成斐波那契数列
 *
 * @param int $length 数列长度
 * @return array
 */
function fibonacci($length = 0)
{
    $list = [];

    if (0 === $length) return [];
    for ($i = 0; $i <= $length; $i++) {
        if (0 === $i) {
            $list[] = 0;
        } else if (1 === $i) {
            $list[] = 1;
        } else {
            $list[] = $list[$i - 1] + $list[$i - 2];
        }
    }
    return $list;
}

$fibo = fibonacci(50);
print_r($fibo);