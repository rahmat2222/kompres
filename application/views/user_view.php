<!DOCTYPE HTML>
<html>
<Head>
	<title>Dika</title>
<body>

<h1>
<?php
	echo $inivariabel;
?>
</h1>
<h2>
<?php
	foreach($result as $object)
	{
		echo $object->username."<br>";
	}
?>
</h2>
</body>
</Head>
</html>