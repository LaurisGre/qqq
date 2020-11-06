<?php

$show_report = false;

function transform_string(string $str, int $multi): string
{
	$new_string = '';

	for ($i = 0; $i < strlen($str); $i++) {
		if ($str[$i] != ' ') {
			for ($u = 0; $u < $multi; $u++) {
				$new_string .= $str[$i];
			}
		} else {
			$new_string .= ' ';
		}
	}

	return $new_string;
}

if (isset($_POST['submit'])) {
	if ($_POST['string'] !== '') {
		if ($_POST['multi'] > 0) {
			$report = transform_string($_POST['string'], $_POST['multi']);
		} else {
			$report = 'Please enter a number higher than 0';
		}
	} else {
		$report = 'Please enter a word';
	}
	$show_report = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
	<title>EZ Friday? Forms</title>
</head>

<body>
	<section>
		<form method="POST">
			<input type="text" name="string" id="" placeholder="words here">
			<input type="number" name="multi" id="" placeholder="number here">
			<input type="submit" name="submit" id="">
		</form>
	</section>
	<section>
		<?php if ($show_report) : ?>
			<p><?php print $report; ?></p>
		<?php endif; ?>
	</section>
</body>

</html>