<?php
$show_mess = false;
$log_message = '';

$users = [
	[
		'user_email' => 'jonas@jonas.com',
		'password' => 'jonasjonas',
	],
	[
		'user_email' => 'plovas@plovas.com',
		'password' => 'plovasplovas',
	],
	[
		'user_email' => 'klonas@klonas.com',
		'password' => 'klonasklonas',
	],
];

function password_match(array $data): bool
{
	return $data['pass1'] === $data['pass2'];
}

function validate_user(string $new_user, array &$user_data, string &$message)
{
	$message = '';

	foreach ($user_data as $user) {
		if ($user['user_email'] === $new_user) {
			return $message = 'User with this email already exists';
		}
	}

	$user_data[] = [
		'user_email' => $_POST['email'],
		'password' => $_POST['pass1'],
	];

	$message = 'Congratulations you signed up!';
}

if (isset($_POST['submit'])) {
	if ($_POST['pass1'] !== '' && $_POST['pass1'] !== '') {
		if (password_match($_POST)) {
			validate_user($_POST['email'], $users, $log_message);
		} else {
			$log_message = 'ERROR PASSWORD INCONSISTENCY DETECTED';
		}
	}
	var_dump($users);
	$show_mess = true;
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
	<article>
		<form method="POST">
			<p>eMail:</p>
			<input type="email" name="email" placeholder="email address">
			<p>Password:</p>
			<input type="password" name="pass1" placeholder="password">
			<p>Repeat Password:</p>
			<input type="password" name="pass2" placeholder="repeat password">
			<input class="button" type="submit" name="submit" id="" value="Sign In">
		</form>
		<?php if ($show_mess) : ?>
			<p><?php print $log_message; ?></p>
		<?php endif; ?>
	</article>
</body>

</html>