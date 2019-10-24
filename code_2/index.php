<?

/*
time:2019年10月24日 19:44:36
author:lhm 
function:截取路径中文件名及扩展名等操作
use function:
(1)strpos();查询字符在字符串中第一次出现的位置
(2)strrpos();查询字符在字符串中最后一次出现的位置
(3)substr();字符串截取
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
