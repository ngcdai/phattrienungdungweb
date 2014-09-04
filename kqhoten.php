<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$a=$_POST["hoten"];
//chuyển hết về chữ thường
$a=strtolower($a);
trim($a);
$b=str_split($a,1);
//viêt hoa chữ cái đầu tiên
$b[0]=strtoupper($b[0]);
// xóa có 2 khoảng trống
for ($i=0;$i<strlen($a);$i++)
  if ($b[$i]==" " && ($b[$i+1]==" ")) $b[$i+1]="";
// cập nhật lại mảng b
  $a=implode("",$b);
  $b=str_split($a,1);
// viết hoa chữ đứng đầu
for ($i=0;$i<strlen($a);$i++)
	if ($b[$i]==" ")
		$b[$i+1]=strtoupper($b[$i+1]);
//chuyển từ chuỗi sang mảng
$a=implode("",$b);
$a=mb_convert_case($a, MB_CASE_TITLE, "UTF-8");
echo  "Chào bạn:".$a;
?>
</body>
</html>