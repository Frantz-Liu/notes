<?
//n位随机码
/*
    这里的随机码可以保障在62位以内.
*/
function code($length){
    $arr = array_merge(range('0','9'),range('a','z'),range('A','Z'));
    shuffle($arr);
    $arr_slice = array_slice($arr,0,$length);
     $str = implode('',$arr_slice);
    return $str;
}
code($length);
?>