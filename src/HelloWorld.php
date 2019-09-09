<?php
/**
 * Created by PhpStorm.
 * User: Bruce Xie
 * Date: 2019-09-09
 * Time: 03:41
 */

// 关于这个命名空间名称，你可以随便写。当然，如果src目录下还有一层目录，则一般都写这层目录的名字，如果没有，也可以写公司简称，即“供应商名/项目名”中的“供应商名”，如果是个人项目，可以写github用户名，这里我就随便写一个“pack”，这样更好的说明这是可以随意写的。
namespace pack;

class HelloWorld {
	public function sayHello(){
		echo 'Hello world!';
	}
	
	public static function sayHelloStatic(){
		echo 'Hello world static';
	}
}