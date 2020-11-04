<?php

$report = 'Choose your weather';

if (isset($_POST['sub'])) {
	switch ($_POST['weather']) {
		case 'rainy':
			$report = 'It will be rainy';
			break;
		case 'sunny':
			$report = 'It will be sunny';
			break;
		case 'snowy':
			$report = 'It will be snowy';
			break;
		case 'cloudy':
			$report = 'It will be cloudy';
			break;
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
		<p>Select the weather type:</p>
		<form method="POST">
			<select name="weather" id="">
				<option value="rainy">rainy</option>
				<option value="sunny">sunny</option>
				<option value="snowy">snowy</option>
				<option value="cloudy">cloudy</option>
			</select>
			<input type="submit" name="sub">
		</form>
		<p><?php print $report; ?></p>
	</section>
</body>

</html>