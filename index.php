<?php

function create_deck() {
    $card_suits = ['clubs', 'hearts', 'diamonds', 'spades'];
    $whole_suit = ['2', '3', '4', '5', '6' , '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
    $deck = [];

    foreach($card_suits as $suit) {
        foreach ($whole_suit as $key => $card) {
            $deck[] = [
                'suit' => $suit,
                'card' => $card
            ];
        }
    }

    return $deck;
}

function draw_cards($deck) {
    $cards = [];

    for ($i = 0 ; $i < 5 ; $i++) {
        $random_card = rand(0, count($deck)-1);
        $cards[] = $deck[$random_card];
        array_splice($deck, $random_card, 1);
    }

    return $cards;
}

function check_flush($hand) {
    $hand_suits = [];
    foreach($hand as $card) {
        $hand_suits[] = $card['suit']; 
    }

    if(count(array_unique($hand_suits)) === 1){
        return 'YES';
    }
    
    return 'NO';
}

function count_cards($hand) {
    $hand_cards = [];
    foreach($hand as $card) {
        $hand_cards[] = $card['card']; 
    }

    return array_count_values($hand_cards);
}

$new_deck = create_deck();
$new_cards = draw_cards($new_deck);
var_dump(count_cards($new_cards));
$p = 'Do I have a flush? ' .  check_flush($new_cards);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Cards 2: Electric Boogaloo</title>
</head>
<body>
    <!-- <div class="table">
        <div class="table__cards">
            <?php foreach($new_cards as $card): ?>
                <article class="card">
                    <section class="card__top card__text">
                        <?php print $card['card']; ?>
                    </section>
                    <section class="card__mid">
                        <div class="card__mid__img <?php print $card['suit'] ?>"></div>
                    </section>
                    <section class="card__bot card__text">
                        <?php print $card['card']; ?>
                    </section>
                </article>
            <?php endforeach; ?>
        </div>
        <p class="table__text"><?php print $p; ?></p>
    </div> -->
</body>
</html>