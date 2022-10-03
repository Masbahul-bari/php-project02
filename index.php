<?php
$a=NULL;
$b=23;
  if(isset($a)){
  	print "Output will be NULL.\n";
  }
  if(isset($b)){
  	print "Output will be 23.\n";
  }
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>main</title>
	<style>
		h1 {text-align: center;}
		div.container {
                      text-align: center;
                    }

             ul.myUL {
                     display: inline-block;
                     text-align: left;
                    }
	</style>
</head>
<body>
	
     <h1><u><font size="+7">Please Select an option.</font></u></h1>
	<div class="container">
	<ul class="myUL">
		<li><font size="+5"><a href="reg.php" target="_blank" style="text-decoration: none;">Registration</a></font></li>

		<li><font size="+5"><a href="admin1.php" target="_blank" style="text-decoration: none;">Admin</a></font></li>

		<li><font size="+5"><a href="view_db.php" target="_blank" style="text-decoration: none;">View the selary</a></font></li>

	</ul>
	</div>

</body>
</html>