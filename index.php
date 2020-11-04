<?php

$print = false;
$enter = 'Please enter the number higher than 1';

if(isset($_POST['sub'])) {
	if(isset($_POST['num']) && is_numeric($_POST['num']) && $_POST['num'] > 1) {
		$print = true;
	}	
}

function tree_maker($num)
{
	for ($i = 1 ; $i <= $num ; $i++) {
		for ($u = 0 ; $u < $i ; $u++) {
			print '*';
		}
		print '</br>';
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Wednesday Forms</title>
</head>

<body>
	<section>
		<form method="POST">
			<p>Enter number:</p>
			<input type="text" name="num">
			<input type="submit" name="sub">
		</form>
		<div class="tree"><?php $print ? tree_maker($_POST['num']) : print $enter; ?></div>
	</section>
</body>

</html>