<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 2018/4/28
 * Time: 17:24
 */

class mix
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    private function name()
    {
        return $this->name . " is a handsome man";
    }

    public static function getName($name)
    {
        $name = new static($name);//在静态方法中对类进行实例
        return $name->name();
    }
}

echo mix::getName('徐卓善');

die;
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