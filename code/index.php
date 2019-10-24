<?php
/*
time:2019年10月24日 16:20:53
author:lhm
function:利用PHP原生函数生成5位数字字母格式的字符随机码
mind:通过数组将0-9,a-z,A-Z按顺序进行排列,然后将数组打乱,截取数组5个键值对,最后将其转成字符串
use function : 
(1)array_merge();将多个数组合并成一个大数组;
(2)range();生成有规律的数组;
(3)shuffle();打乱数组;
(4)array_slice(变量,起始位置,截取长度);截取数组键值对.
(5)implode();数组转成字符串
extention:
(1)array_splice(需要被替换数组,起始位置,长度,替换数组);从数组中移除选定的元素,并用新元素替代,该函数也将返回包含被移除元素的数组.
(2)join(); 是implode()别名,功能都是将数组拼接成字符串.
(3)explode();将字符串转成数组.
*/

//(1)将数组进行按顺序进行排列,并将三个数组合并成一个大数组
$arr = array_merge(range('0','9'),range('a','z'),range('A','Z'));
//(2)将大数组打乱
shuffle($arr);
//(3)截取数组5位键值对,
$arr_slice = array_slice($arr,0,5);
//(4)将数组转成字符串并输出
$str = implode('',$arr_slice);
echo $str;





