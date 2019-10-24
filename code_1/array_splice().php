<?
//测试:array_splice();
//原始函数
$arr_src = array("a"=>"red","b"=>"yellow","c"=>"green","d"=>"black");
//替换函数
$arr_dire = array("a"=>"blue","b"=>"purple");
$arr_splice = array_splice($arr_src,0,2,$arr_dire);
echo "<pre>";
// var_dump($arr_splice);
// print_r($arr_splice);
// echo "<br>";
print_r($arr_src);
// echo "<br>";
// print_r($arr_dire);
echo "</pre>";
exit();
/*array_splice()函数第三个参数,测试结果:
(1)正数:
a.正数情况下,若是设置的长度不超过替换函数:
(i)若长度与替换长度相同,则将替换函数中的元素替换原数组函数的键值,剩余部分键值不变
array_splice($arr_src,0,2,$arr_dire)
结果:
Array
(
    [0] => blue
    [1] => purple
    [c] => green
    [d] => black
)
(ii)若长度比替换长度小,则替换函数将设置的长度进行替换原数组的键值,剩余部分的键值原样输出.
array_splice($arr_src,0,1,$arr_dire)
结果:
Array
(
    [0] => blue
    [1] => purple
    [b] => yellow
    [c] => green
    [d] => black
)
(b)第三个参数超过替换函数的长度但不超过原函数长度
array_splice($arr_src,0,3,$arr_dire)
结果:
Array
(
    [0] => blue
    [1] => purple
    [d] => black
)
(c)第三个超过替换函数长度且超过原函数长度
array_splice($arr_src,0,5,$arr_dire)
结果:
Array
(
    [0] => blue
    [1] => purple
)
(2)负数:
(i)当第三个参数设置为负数时,表示从数组最后一个元素前的元素全部被替换,
$arr_splice = array_splice($arr_src,0,-1,$arr_dire);
Array
(
    [0] => blue
    [1] => purple
    [d] => black
)
(ii)第三参数设置为负数超过原数组的长度,则返回的结果是在原数组开头插入替换数组元素
$arr_splice = array_splice($arr_src,0,-5,$arr_dire);
Array
(
    [0] => blue
    [1] => purple
    [a] => red
    [b] => yellow
    [c] => green
    [d] => black
)

(3)不填:
提示警告错误,结果为数组未被替换
$arr_splice = array_splice($arr_src,0,$arr_dire)
Warning: array_splice() expects parameter 3 to be long, array given in D:\phpStudy\PHPTutorial\WWW\notes\notes\index.php on line 21
Array
(
    [a] => red
    [b] => yellow
    [c] => green
    [d] => black
)
(4)0:
当第三个参数为0时,表示替换长度为0,则将替换函数中的元素直接塞到原函数开头位置,
array_splice($arr_src,0,0,$arr_dire)
Array
(
    [0] => blue
    [1] => purple
    [a] => red
    [b] => yellow
    [c] => green
    [d] => black
)


array_splice()函数第三个参数:总结:
(1)当第三个参数为0,正数时,设置的第三个参数为需要被替换数组替换的元素的长度,
    简单的说就是按照设置的第三参数长度移除原数组中等长度的元素,将替换数组中
    所有元素插入到移除元素的位置,插入的元素键则变成关联数组键,剩余原数组未移除的
    元素键值不变.特别的当第三个参数为0时,执行原数组插入操作.
(2)当第三参数为负数时,不论负数多大,都是从原数组最后一个元素的前一个位置到开始位置进行移除,
    当负数超过原数组长度,则就变成在原数组开始位置插入元素操作.
(3)当省略第三个参数时,会报警告错误,但是会返回替换数组的所有元素,与(1)相同:使用替换数组中元素去替换原数组中所有的元素.

*/
?>