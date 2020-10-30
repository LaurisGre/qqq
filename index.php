<?php

function create_deck()
{
    $card_suits = ['clubs', 'hearts', 'diamonds', 'spades'];
    $whole_suit = [2, 3, 4, 5, 6 , 7, 8, 9, 10, 'J', 'Q', 'K', 'A'];
    $deck = [];

    foreach ($card_suits as $suit) {
        foreach ($whole_suit as $key => $card) {
            $deck[] = [
                'suit' => $suit,
                'card' => $card
            ];
        }
    }

    return $deck;
}

function draw_cards($deck)
{
    $cards = [];

    for ($i = 0; $i < 5; $i++) {
        $random_card = rand(0, count($deck) - 1);
        $cards[] = $deck[$random_card];
        array_splice($deck, $random_card, 1);
    }

    return $cards;
}

function check_flush($hand)
{
    $hand_suits = [];
    foreach ($hand as $card) {
        $hand_suits[] = $card['suit'];
    }

    if (count(array_unique($hand_suits)) === 1) {
        return 'YES';
    }

    return 'NO';
}

function count_cards($hand)
{
    $hand_cards = [];
    foreach ($hand as $card) {
        $hand_cards[] = $card['card'];
    }

    return array_count_values($hand_cards);
}

function check_pair($hand)
{
    if (in_array(2, count_cards($hand))) {
        return 'YES';
    }

    return 'NO';
}

function check_two_pair($hand)
{
    if (in_array(2, count_cards($hand))) {
        if (array_count_values(count_cards($hand))[2] === 2) {
            return 'YES';
        }
    }

    return 'NO';
}

function check_triple($hand)
{
    if (in_array(3, count_cards($hand))) {
        return 'YES';
    }

    return 'NO';
}

function check_quad($hand)
{
    if (in_array(4, count_cards($hand))) {
        return 'YES';
    }

    return 'NO';
}

function check_house($hand)
{
    if (in_array(3, count_cards($hand)) && in_array(2, count_cards($hand))) {
        return 'YES';
    }

    return 'NO';
}

function check_straight($hand)
{
    //early exit
    //check if we have 5 unique cards
    if (count(count_cards($hand)) != 5) {
        return 'NO';
    }

    //placeholder array
    $hand_cards = [];

    //assign numerical values to face cards
    //and push them to the placeholder array
    foreach ($hand as $card) {
        switch ($card['card']) {
            case 'J':
                $hand_cards[] = 11;
                break;
            case 'Q':
                $hand_cards[] = 12;
                break;
            case 'K':
                $hand_cards[] = 13;
                break;
            case 'A':
                $hand_cards[] = 14;
                break;
            default:
                $hand_cards[] = $card['card'];
        }
    }

    //sort the hand by numerical value
    sort($hand_cards);

    //loop to check if the sorted cards are in the correct order
    for ($i = 0; $i < 4; $i++) {
        //four cycles to check if each card is in the correct order
        if (!($hand_cards[$i] + 1  === $hand_cards[$i + 1])) {
            //if the condition is false check if it's a wrap straight
            //every wrap straight has a 2 and an Ace
            if ($hand_cards[0] === 2 && $hand_cards[4] === 14) {
                //check if the rest of the cards are in order
                for ($u = $i + 1; $u < 4; $u++) {
                    if (!($hand_cards[$u] + 1  === $hand_cards[$u + 1])) {
                        return 'NO';
                    }
                }
                return 'YES IT\'S A MOTHERFUCKING STRAIGHT DUDE';
            }
            //if it's not it's not a wrap straight
            return 'NO';
        }
    }
    return 'YES IT\'S A MOTHERFUCKING STRAIGHT DUDE';
}

$new_deck = create_deck();
$new_cards = draw_cards($new_deck);
$p1 = 'Do I have a Flush? ' .  check_flush($new_cards);
$p2 = 'Do I have a Pair? ' . check_pair($new_cards);
$p22 = 'Do I have a Doable Pair? ' . check_two_pair($new_cards);
$p3 = 'Do I have a Three of a kind? ' . check_triple($new_cards);
$p4 = 'Do I have a Four of a kind? ' . check_quad($new_cards);
$p5 = 'Do I have a Full House? ' . check_house($new_cards);
$p6 = 'Do I have a Straight? ' . '</br>' . check_straight($new_cards);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <title>Cards 2: Electric Boogaloo</title>
</head>

<body>
    <main class="table">
        <div class="table__cards">
            <?php foreach ($new_cards as $card) : ?>
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
        <p class="table__text"><?php print $p1; ?></p>
        <p class="table__text"><?php print $p2; ?></p>
        <p class="table__text"><?php print $p22; ?></p>
        <p class="table__text"><?php print $p3; ?></p>
        <p class="table__text"><?php print $p4; ?></p>
        <p class="table__text"><?php print $p5; ?></p>
        <p class="table__text"><?php print $p6; ?></p>
    </main>
</body>

</html>