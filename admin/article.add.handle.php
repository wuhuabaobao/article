<?php
header("Content-type:text/html;charset=utf-8");
//	$_POST['title']
require_once('../connect.php');

//print_r($_POST);


//把传递过来的信息进行入库，在入库之前对信息进行校验
if(!(isset($_POST['title']) && (!empty($_POST['title'])))){

	echo "<script>alert('标题不能为空'),window.location.href='article.add.php'</script>";
}


$title=$_POST['title'];
$author=$_POST['author'];
$description=$_POST['description'];
$content=$_POST['content'];
$dateline=time();


//只有时间$dateline不是字符串，所以不需要用单引号引起来，是字符串的都要用单引号引起来
$sql="insert into articleInfo(title,author,description,content,dateline) 
values('$title','$author','$description','$content',$dateline)";

//echo $sql;


if(mysqli_query($con,$sql)){
	
	echo "<script>alert('发布文章成功'),window.location.href='article.add.php'</script>";
	
}
else{
	
		echo "<script>alert('发布失败'),window.location.href='article.add.php'</script>";
	
}


?>