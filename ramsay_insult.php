<?php

header('Content-Type: application/json');

$w1 = ["sandwich", "lamb chop", "salad", "soup", "steak", "pasta", "pizza", "burger", "sushi", "taco", "burrito", "hotdog", "meatball", "chicken", "fish", "lobster", "crab", "shrimp", "clam", "oyster", "scallop", "squid", "octopus", "snail", "mussel", "crayfish", "crawfish", "crab", "prawn", "scampi", "calamari", "cuttlefish", "conch", "whelk"];
$w2 = ["RAW", "like a shoe", "like a boot", "like a tire", "like a rock", "like a brick", "like a stone", "like a boulder", "offensive", "in need of Jesus", "like wet cardboard", "like Gandhi's flip flop"];
$w3 = ["walnut", "absolute donkey", "dirty pig", "minger", "muppet", "plonker", "idiot sandwich", "buffoon", "clown", "doughnut", "dunce", "fool", "halfwit", "nincompoop", "numpty", "twit", "wally"];

$insult = "This " . $w1[array_rand($w1)] . " is " . $w2[array_rand($w2)] . ", you " . $w3[array_rand($w3)];

echo json_encode(array("insult" => $insult));