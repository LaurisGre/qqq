<?php

$report = 'Please enter your personal details';

if (isset($_POST['sub'])) {
	if ($_POST['age'] < 18 || $_POST['age'] > 26 || $_POST['criminal'] === 'yes') {
		$report = 'You\'re not going to the army';
	} else {
		$report = 'Congratulations you\'re going to the army';
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
			<p>Provide your age:</p>
			<input type="number" name="age" required>
			<p>I am a criminal</p>
			<input type="radio" name="criminal" value="yes" checked>
			<p>I am not a crook</p>
			<input type="radio" name="criminal" value="no">
			<input type="submit" name="sub" value="Send">
		</form>
		<p><?php print $report; ?></p>
	</section>
</body>

</html>