<?php
header("Content-type:text/html;Charset=utf-8");
include "Upload.class.php";
include "../Model/File.php";

$c=$_REQUEST['c'];
//上传视频资源
function addvideo(){
	$title=$_POST["name"];
	$intro=$_POST['intro'];
	$upload=new Upload();
	$files=$upload->make();
	foreach($files as $file){
		$path = $file['path'];
		$size = $file['size'];
		$name = $file['name'];
	}
	$addvideo=new Files();
	$result=$addvideo->addVideo($title,$intro,$path,$size,$name);
	if($result){
		echo "<script>alert('上传成功')</script>";
		// location.href="../View/UploadFile.html";
	}else{
		echo "<script>alert('上传失败')</script>";
		// location.href="../View/UploadFile.html";
	}
}
if($c=='video'){
	addvideo();
}


