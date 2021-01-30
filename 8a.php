<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>
	<style type="text/css">
		table
		{
			margin: auto;
			margin-top: 100px;
		}
		table,td,th
		{
			border: 1px solid black;
			background-color: gray;
			width: 35%;
			text-align: center;
		}
		input,p
		{
			text-align: right;
		}
	</style>
</head>
<body>
<form method="post">
	<table>
		<caption><h2>Simple Calculator</h2></caption>
		<tr>
			<td>First number:</td>
			<td><input type="text" name="num1"></td>
			<td rowspan="2"><input type="submit" name="submit" value="Calculate"></td>
		</tr>
		<tr>
			<td>Second number:</td>
			<td><input type="text" name="num2"></td>
		</tr>

</form>
<?php
if(isset($_POST['submit']))
{
	$n1=$_POST['num1'];
	$n2=$_POST['num2'];
    
    if(is_numeric($n1) and is_numeric($n2))
   {
	$add=$n1+$n2;
	$sub=$n1-$n2;
	$mul=$n1*$n2;
	$div=$n1/$n2;
    echo "<tr><td>Addition:</td>
    <td colspan=2>$add</td></tr>
    <tr><td>Subtraction:</td>
    <td colspan=2>$sub</td></tr>
    <tr><td>Multiplication:</td>
    <td colspan=2>$mul</td></tr>
    <tr><td>Division:</td>
    <td colspan=2>$div</td></tr></table>";
}
else
{echo "<script type='text/javascript'>alert('Enter a valid number');</script>";
}
}
?>
</body>
</html>