<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$Idlogin = 5632470220544;
$cutYear = substr($Idlogin,0,2);

$PresentYesar = date("y")+43;




 $cmpYesr=strcmp($PresentYesar, $cutYear);
if($cmpYesr==0){
	echo "รหัสนักศึกษาเท่ากับปีปัจจุบัน น้องปี1หรอจ๊ะๆ";
	
}

if($cmpYesr==1 &&(($PresentYesar-$cutYear) <=3))
{
echo "ปีปัจจุบันปีมากกว่ารหัสนักศึกษาได้";
}
if($cmpYesr==1 &&(($PresentYesar-$cutYear) >3)){
	
	echo "รหัสนศหมดอายุรึเปล่า !!";
}

if($cmpYesr==-1)
{
echo "รหัสนักศึกษามากกว่าปีปัจจุบันไม่ได้";
}



?>
</body>
</html>