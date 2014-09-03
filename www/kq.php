<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$a =$_POST["a"];
$b =$_POST["b"];
$c=$_POST["c"];
if ($a==0 and $b==0 and $c==0)
   {
	echo "Phương trình vô số nghiệm";
   }
else if ($a==0 and $b==0 and $c!=0)
   {
	echo "Phương trình vô nghiệm";
   }
else if ($a==0 and $b!=0)
   {
	echo "Phương trình có 1 nghiệm x=";
	echo + -$c/$b;
   }
else if ($a!=0)
   {
	$d=$b*$b-4*$a*$c;
	if ($d<0)
	  {
		  echo "Phương trình vô nghiệm";
	  }
	else if ($d==0)
	  { 
	  echo "Phương trình có 1 nghiệm kép x1=x2= ". -$b/(2*$a);
	  }
	else
	  {
		 echo "Phương trình có 2 nghiệm phân biệt:<br> x1=". (-$b+sqrt($d))/(2*$a)."<br>  x2=".(-$b-sqrt($d))/(2*$a);
	   }
   }
?>
</body>
</html>