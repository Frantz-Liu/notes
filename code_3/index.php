<?php
/*
构造方法继承方法:
__contruct()
*/
//1.在子类中没有构造方法,则继承父类的构造方法
//父类:
class A{
    public $name;
    public function __construct($name){
        echo $this->name=$name;
    }  
}
//子类继承父类
class B extends A{

}
$obj = new B('张三');//打印输出结果为张三
echo "<br>";
//2.子类中含有构造方法,则不会被继承
class C{
    public $name;
    public function __construct(){
        echo $this->name="张三";
    }  
}
//子类继承父类
class D extends C{
    public function __construct($type)
    {
        echo $this->type=$type;
    }
}
$obj = new D("D类");
echo "<br>";
//3.子类继承父类构造方法使用parent::__construct();
class E{
    public $name;
    public function __construct($name){
        echo $this->name=$name;
    }  
}
//子类继承父类
class F extends E{
    public $type;
    //子类的构造方法的参数一定要比父类的多或者相等,否则报错.
    public function __construct($name,$type)
    {
        parent::__construct($name);
        echo $this->type=$type;
    }
}
$obj = new F("张三","D类");
echo "<br>";

//trait方法的使用
/*
1.trait 方法与class类似,但是trait的类无法实例化,只能用在继承中才能进行实例化;
2.trait 通常与use一同使用,trait的产生是为了解决class单一继承的缺点;
3.trait 若是多个trait则使用","隔开..即  use 1,2,3,4;(这里举例假如trait类的名叫1,2,3);
4.trait 优先级问题: 子类中若是定义的类方法名与class trait中定义的类方法名相同,
        则实例化后调用方法输出的结果为:子类中定义的方法优先级最高,其次是trait类中的方法输出,
        最后是继承的class方法.简言之,子类中的方法输出会覆盖trait类的方法,trait类中的方法会覆盖class类中的方法.
*/
class teacher{
    // public $name;
    public function name(){
        echo $this->name="张一";
    }  
}
trait teacher1{
    // public $name;
    public function name(){
        echo $this->name="张二";
    }  
}
class student extends teacher{
    use teacher1;
    public function name(){
        echo $this->name="张三";
    }
}
$obj = new student;
$obj->name();


?>