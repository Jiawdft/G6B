<?php
	include("../Test2/Test2_langue.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test2</title>
	<link href="../Test/Test.css" rel="stylesheet" type="text/css" />
  	
</head>
	<body>
		<a href="../Test2/Test2.php?langue=fr">FR</a>
		<a href="../Test2/Test2.php?langue=en">EN</a>
		<p><?php echo TXT_TEST2; ?></p>
		<a href="../Test1/Test.php?langue=<?php echo $_GET['langue']?>">TEST1</a>
	</body>
</html>