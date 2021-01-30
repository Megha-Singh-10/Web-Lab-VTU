<!DOCTYPE html>
<html>
<head>
	<title>Matrix Operations</title>
</head>
<body>
<?php
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$b=array(array(11,12,13),array(14,15,16),array(17,18,19));

$m=count($a);
$n=count($a[0]);
$p=count($b);
$q=count($b[0]);

echo "The first matrix: <br/>";
for($i=0;$i<$m;$i++)
{
	for($j=0;$j<$n;$j++)
		echo " ".$a[$i][$j];
	echo "<br/>";
}
echo "The second matrix: <br/>";
for($i=0;$i<$p;$i++)
{
	for($j=0;$j<$q;$j++)
		echo " ".$b[$i][$j];
	echo "<br/>";
}
echo "The transpose of the first matrix: <br>";
for($i=0;$i<$m;$i++)
{
	for($j=0;$j<$n;$j++)
		echo " ".$a[$j][$i];
	echo "<br/>";
}
echo "The transpose of the second matrix: <br>";
for($i=0;$i<$p;$i++)
{
	for($j=0;$j<$q;$j++)
		echo " ".$b[$j][$i];
	echo "<br/>";
}
if($m==$p and $n==$q)
{
	echo "The addition of the matrices: <br>";
	for($i=0;$i<$p;$i++)
{
	for($j=0;$j<$q;$j++)
		echo " ".$a[$i][$j]+$b[$i][$j]." ";
	echo "<br/>";
}
}
if($n==$p)
{
	echo "Multipication of the matrices: <br>";
	$result= array();
	for($i=0;$i<$m;$i++)
 {
	for($j=0;$j<$q;$j++)
	{
       $result[$i][$j]=0;
       for($k=0;$k<$n;$k++)
       	$result[$i][$j]+=$a[$i][$k]*$b[$k][$j];
	}
 }
 for($i=0;$i<$m;$i++)
 {
	for($j=0;$j<$q;$j++)
	echo " ".$result[$i][$j];
	echo "<br>";
 }
}
?>
</body>
</html>