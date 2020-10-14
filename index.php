<?php 
    $player_card_1 = rand(0, 11);
    $player_card_2 = rand(0, 11);
    $player_score = $player_card_1 + $player_card_2;

    $dealer_card_1 = rand(0, 11);
    $dealer_card_2 = rand(0, 11);
    $dealer_score =  $dealer_card_1 +  $dealer_card_2;

    if ($player_score > $dealer_score) {
        $winner = 'Player is the winner with ' . $player_score;
    } else if ($player_score < $dealer_score) {
        $winner = 'Dealer is the winner with ' . $dealer_score;
    } else {
        $winner = 'It\'s a draw both players got ' . $player_score;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Twenty one</title>
</head>

<style>
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        color: white;
    }

    #gameBox {
        background-color: darkgreen;
        padding: 20px;
        border-radius: 20px;
        border: 10px groove brown;
        width: 400px;
    }

    #winnerBox {
        margin: 10px 0;
        font-size: 30px;
        font-weight: bold;
    }

    .cardBox {
        display: flex;
        justify-content: space-between;
    }

    .card {
        height: 80px;
        width: 50px;
        border: 5px solid white;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 40px;
        padding: 10px;
        margin: 10px;
    }
</style>

<body>
    <div id="gameBox">
        <div id="winnerBox">
            <?php print $winner; ?>
        </div>
        <div id="dealerBox">
            <div>Dealer gets <?php print $dealer_score; ?></div>
            <div class="cardBox">
                <div class="card"><?php print $dealer_card_1; ?></div>
                <div class="card"><?php print $dealer_card_2; ?></div>
            </div>
        </div>
        <div id="playerBox">
            <div>Player gets <?php print $player_score; ?></div>
            <div class="cardBox">
                <div class="card"><?php print $player_card_1; ?></div>
                <div class="card"><?php print $player_card_2; ?></div>
            </div>
        </div>
    </div>
</body>
</html>