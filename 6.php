<!DOCTYPE html>
<html>
<head>
	<title>Program 6</title>
</head>
<body>
<?php 
print "<h3>Refresh Page</h3>";
$fname="File.txt";
$f1=fopen($fname,"r");
$count=fscanf($f1, "%d");
fclose($f1);

$count[0]++;
$f2=fopen($fname, "w");
fprintf($f2,"%d",$count[0]);
fclose($f2);

print "Total number of views: $count[0]";
 ?>
</body>
</html>