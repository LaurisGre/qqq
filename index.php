<?php
$message_sent = false;
$data = [];

function prep_data(array $data): array
{
	$preped_arr = [];
	foreach ($data as $index => $value) {
		if ($value !== 'Send') {
			$preped_arr[] = "$index: $value";
		}
	}

	return $preped_arr;
}

function validate_field_not_empty(string $value): bool
{
	if ($value === '') {
		return false;
	}
	return true;
}

if (isset($_POST['sub'])) {
	$message_sent = true;
	$data = prep_data($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
	<title>Thurday Forms</title>
</head>

<body>
	<?php if (!$message_sent) : ?>
		<article class="message_send">
			<header>WRITTE US A MESSAGE</header>
			<form method="POST">
				<input type="text" name="Name" placeholder="Your name" required>
				<section class="split">
					<input type="email" name="eMail" placeholder="eMail address" required>
					<input type="number" name="Phone" placeholder="Phone number">
				</section>
				<p>I would like to contact:</p>
				<label>
					<input type="radio" name="Contact" value="Sales Department" required>
					<p>Sales Department</p>
				</label>
				<label>
					<input type="radio" name="Contact" value="Administration" required>
					<p>Administration</p>
				</label>
				<label>
					<input type="radio" name="Contact" value="Client Management" required>
					<p>Client Management</p>
				</label>
				<select name="Subject" id="">
					<option value="complaint">Complaint</option>
					<option value="suggestion">Suggestion</option>
					<option value="question">Question</option>
				</select>
				<textarea name="Message" placeholder="Your message here"></textarea>
				<input type="submit" name="sub" value="Send" class="butt">
			</form>
		</article>
	<?php else : ?>
		<article class="message_info">
			<header>
				<p>Thank you for your message, <?php print $_POST['Name']; ?></p>
				<section>
					<p>Your message info:</p>
					<?php foreach ($data as $value) : ?>
						<p><?php print $value; ?></p>
					<?php endforeach; ?>
				</section>
			</header>
		</article>
	<?php endif; ?>
</body>

</html>