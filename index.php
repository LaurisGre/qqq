<?php
$show_win = false;
$message = '';
$cards = [
	'card1' => 0,
	'card2' => 0,
	'card3' => 0,
	'card4' => 0,
];

function spin(array &$cards)
{
	foreach ($cards as &$card) {
		$card = rand(0, 1);
	}
}

function check_win(array $cards): bool
{
	foreach ($cards as $card) {
		if ($card != $cards['card1']) {
			return false;
		}
	}

	return true;
}

function print_cash(bool $check): string
{
	return $check ? 'You won $' . $_POST['bet'] * 4 : 'You lost $' . $_POST['bet'];
}

if (isset($_POST['sub'])) {
	if ($_POST['bet'] > 0) {
		spin($cards);
		$message = print_cash(check_win($cards));
	} else {
		$message = 'Please enter your bet';
	}

	$show_win = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
	<title>Lotto</title>
</head>

<body>
	<article>
		<form method="POST">
			<input type="number" name="bet" id="" placeholder="your bet here" value=<?php print $_POST['bet'] ?? '' ?>>
			<input class="button" type="submit" name="sub" id="" value="Play!">
		</form>
		<section class="card_box">
			<?php foreach ($cards as $card) : ?>
				<div class="card card-<?php print $card; ?>"></div>
			<?php endforeach; ?>
		</section>
		<?php if ($show_win) : ?>
			<section class="win_box">
				<p><?php print $message; ?></p>
			</section>
		<?php endif; ?>
	</article>
</body>

</html>