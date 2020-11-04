<?php
$report = '';

if (isset($_POST['sub'])) {
	$trimmed_name = trim($_POST['name'], ' ');
	if (strpos($trimmed_name, ' ')) {
		$names = explode(' ', $_POST['name']);
		$names_capitalize = [];
		foreach ($names as $name) {
			$names_capitalize[] = ucwords($name);
		}
		$name_string = implode(' ', $names_capitalize);
		$report = $name_string;
	} else {
		$report = 'Please enter your name with spaces in between each name';
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
			<input type="text" name="name">
			<input type="submit" name="sub" value="Check">
		</form>
		<p><?php print $report; ?></p>
	</section>
</body>

</html>