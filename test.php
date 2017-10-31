<?php
	require_once('connect.php');
	
	
	


	
//	测试mysqli_insert_id($con)
//	$sql="insert into articleInfo(title) values ('111111111111111111111111111')";
//	$query=mysqli_query($con,$sql);
//	print_r(mysqli_insert_id($con));
	
	
	$sql="select * from articleInfo";
	$query=mysqli_query($con,$sql);	
	
//	mysqli_fetch_row 取出一行打印
//	$row = mysqli_fetch_row($query);
//	print_r($row);
	
//	mysqli_fetch_row 循环打印   一维数组
//		while($row=mysqli_fetch_row($query)){
//			print_r($row);			
//		}

//  mysqli_fetch_row 循环打印 二维数组
//		while($row=mysqli_fetch_row($query)){
//			$data[] = $row;		
//		}
//		print_r($data);
//		
//		print_r($data[3][5]);


//	mysqli_fetch_array 取出一行打印     结果是混合了 索引数组和关联数组 交叉的结果
//	$row=mysqli_fetch_array($query);
//	print_r($row);
	
	
//	mysqli_fetch_array 循环打印   一维数组
//		while($row=mysqli_fetch_array($query)){
//			print_r($row);			
//		}
	
//  mysqli_fetch_array 循环打印 二维数组
//		while($row=mysqli_fetch_array($query,MYSQL_ASSOC)){
//			$data[] = $row;		
//		}
//		print_r($data[3]['dateline']);	
//		print_r($data);

//mysqli_fetch_array的 第二个参数决定返回的类型：
//MYSQL_BOTH  默认，返回关联和索引
//MYSQL_NUM  返回索引
//MYSQL_ASSOC 返回关联
		
		
//mysql_fetch_row()和mysql_fetch_array()的区别为,第一个只返回索引数组，
//第二个既可返回索引数组也可返回关联数组。默认(MYSQL_BOTH)为同时返回索
//引数组和关联数组;关联数组(MYSQL_ASSOC);索引数组(MYSQL_NUM).同时，在
//获取值的速度上，mysql_fetch_row()比mysql_fetch_array()快。		




//	mysqli_fetch_assoc 取出一行打印
//	$row = mysqli_fetch_assoc($query);
//	print_r($row);
	
//	mysqli_fetch_assoc 循环打印   一维数组
//		while($row=mysqli_fetch_assoc($query)){
//			print_r($row);			
//		}

//  mysqli_fetch_assoc 循环打印 二维数组
//		while($row=mysqli_fetch_assoc($query)){
//			$data[] = $row;		
//		}
//		
//		print_r($data[0]['dateline']);
//		print_r($data);


//mysqli_fetch_object 对象的取值赋值
//	$obj=mysqli_fetch_object($query);
//	print_r($obj->dateline);
//	print_r($obj);

//mysqli_fetch_object 的循环输出
//	while($obj=mysqli_fetch_object($query)){
//		
//		echo $obj->dateline;
//		echo "<br />";
//		
//	}



//mysqli_num_rows  查询结果的记录数
//	$num=mysqli_num_rows($query);
//	echo $num;
	
//mysqli_num_rows配合$query	  加上if的判断 
//$query表示有这个结果集，mysqli_num_rows($query)表示结果集不为0，
//这句话的用意在于避免在没有数据的情况还继续往后执行循环操作造成资源上的浪费
//		if($query&&mysqli_num_rows($query)){
//			while($row = mysqli_fetch_assoc($query)){
//				$data[] = $row;
//			}
//			print_r($data);		
//		}
//		else{
//			echo "没有数据";
//		}
		

//mysqli_result这个函数好像已经取消
//取数据行数，为什么这里不用mysqli_num_rows，
//因为要把整张表查一遍，太占用资源
//所以这里用count(*)
//$query2="select count(*) from articleInfo";
//echo mysqli_result($query,0,1);

	
	
//mysql_affected_rows 受影响的纪录行数    返回前一次受  insert update delete 影响的纪录的行数	
//mysql_affected_rows($con);

?>