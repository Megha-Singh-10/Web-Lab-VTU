<!DOCTYPE html>
<html>
<head>
	<title>Clock</title>
	<meta http-equiv="refresh" content="1">
	<style type="text/css">
		p
		{
			color: yellow;
			font-size: 50px;
			position: absolute;
			top:50%;
			left:50%;
			transform: translate(-50%,-30%);
		}
		body
		{
			background-color: black;
		}
	</style>

</head>
<body>
<p>
		<?php
		date_default_timezone_set('Asia/Kolkata');
		echo date('h:i:s A');
		?>
	</p>
</body>
</html>