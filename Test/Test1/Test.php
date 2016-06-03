<?php
	include("../Test1/Test_langue.php");
	$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	echo $url;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link href="../Test/Test.css" rel="stylesheet" type="text/css" />
  	
</head>
	<body>
		<a href="../Test1/Test.php?langue=fr">FR</a>
		<a href="../Test1/Test.php?langue=en">EN</a>
		<p><?php echo TXT_TEST; ?></p>
		<a href="../Test2/Test2.php?langue=<?php echo $_GET['langue']?>">TEST2</a>
	</body>
</html>