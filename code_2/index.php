<?

/*
time:2019年10月24日 19:44:36
author:lhm 
function:截取路径中文件名及扩展名等操作
use function:
(1)strpos();查找字符串在另一字符串中第一次出现的位置（区分大小写）
stripos() - 查找字符串在另一字符串中第一次出现的位置（不区分大小写）
(2)strrpos(字符串,需查找字符串,起始位置);查询字符在字符串中最后一次出现的位置,对大小写敏感
strripos() - 查找字符串在另一字符串中最后一次出现的位置（不区分大小写）
第三个参数可以省略,省略则从起始位置开始
(3)substr(字符串,起始位置,截取长度);字符串截取
第三个参数可选:
正数:从起始位置开始截取
负数:从字符串结尾返回长度
$str = "123456";
echo substr($str,-3);
返回结果:123
*/
//截取文件名及扩展名
$str = "/phpStudy/PHPTutorial/WWW/notes/notes/code_2/index.php";

//查找到'/'最后一次出现的地方
$file_pos = strrpos($str,'/');
//获取到文件名
echo substr($str,$pos+1);

//截取文件扩展名
$ex_pos = strrpos($str,'.');
echo substr($str,$ex_pos+1);

//截取目录
$mu_pos =strrpos($str,'/') ;
echo substr($str,0,$mu_pos);
