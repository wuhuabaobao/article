<?php
	
	require_once('config.php');	
	//连库
		if(!($con=mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE))){
			echo mysql_error();
		}			

//$con=mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE) or die(mysql_error());


	//选库     现在可以把 选库集成到   连库里面
//		if(!(mysqli_select_db($con,'article'))){			
//			echo mysql_error();			
//		}	
	
	//字符集

		if(!mysqli_query($con,'set names utf8')){
			echo mysql_error();
		}
	
//	上面的这种if判断 报错 适合前期开发使用  到后期都要关闭这些错误提示信息 ，以免暴漏出sql语句的一些漏洞出来

?>