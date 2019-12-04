<?php

$geld = intval($argv[1]);

if ($geld){
    echo "$geld x 1 Euro";
}
else{
    echo "Werkt Niet!";
    exit();
}