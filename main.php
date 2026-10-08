<?php

// Get input
$floors = (int) readline('Introdueix el número de pisos: ');
$peoplePerFloor = (int) readline('Introdueix el número de persones per pis: ');

// Constants
$multiplierPinya = 4;
$multiplierFolre = 3;
$multiplierManilles = 2;

// Initialize this to be used
$peopleInPinya = 0;
$peopleInFolre = 0;
$peopleInManilles = 0;

// If peoplePerFloor is even, force all other floors to be even
if ($peoplePerFloor %2 === 0) {
    $peopleInPinya = $peoplePerFloor * $multiplierPinya;
    if ($peopleInPinya % 2 != 0){
        $peopleInPinya++;
    }

    $peopleInFolre= $peoplePerFloor * $multiplierFolre;
    if ($peopleInFolre % 2 != 0){
        $peopleInFolre++;
    }

    $peopleInManilles= $peoplePerFloor * $multiplierManilles;
    if ($peopleInManilles % 2 != 0){
        $peopleInManilles++;
    }
}

// If peoplePerFloor is odd, forces all the other floors to be odd
if ($peoplePerFloor %2 != 0) {
    $peopleInPinya = $peoplePerFloor * $multiplierPinya;
    if ($peopleInPinya % 2 === 0){
        $peopleInPinya++;
    }

    $peopleInFolre= $peoplePerFloor * $multiplierFolre;
    if ($peopleInFolre % 2 === 0){
        $peopleInFolre++;
    }

    $peopleInManilles= $peoplePerFloor * $multiplierManilles;
    if ($peopleInManilles % 2 === 0){
        $peopleInManilles++;
    }
}

// Draw Pinya
for ($i = 1; $i <= $peopleInPinya; $i++) {
    print('*');
}

echo(PHP_EOL);

// Draw Folre. The loop goes the length of Pinya, checks if the itteration is in the blank spaces, and draws the correct symbol
for ($i = 1; $i <= $peopleInPinya; $i++) {
    $spaceOnEachSide = ($peopleInPinya - $peopleInFolre) / 2;

    if($i <= $spaceOnEachSide) {
        print(' ');
        continue;
    }

    if($i > $peopleInPinya - $spaceOnEachSide) {
        print(' ');
        continue;
    }

    print('*');
}

echo(PHP_EOL);

//Draw Manilles,t he loop goes the length of Pinya, checks if the itteration is in the blank spaces, and draws the correct symbol
for ($i = 1; $i <= $peopleInPinya; $i++) {
    $spaceOnEachSide = ($peopleInPinya - $peopleInManilles) / 2;

    if($i <= $spaceOnEachSide) {
        print(' ');
        continue;
    }

    if($i > $peopleInPinya - $spaceOnEachSide) {
        print(' ');
        continue;
    }
    
    print('*');
}

echo(PHP_EOL);

// Draw Normal floors. the internal loop has to go the length of Pinya again, checking if the itteration.
for ($i = 0; $i < $floors; $i++) {
    $spaceOnEachSide = ($peopleInPinya - $peoplePerFloor) / 2;
    for ($j = 1; $j <= $peopleInPinya; $j++) {

        if($j <= $spaceOnEachSide) {
            print(' ');
            continue;
        }

        if($j > $peopleInPinya - $spaceOnEachSide) {
            print(' ');
            continue;
        }

        print('*');
    }

    if ($i < ($floors - 1)) {
        echo(PHP_EOL);
    }
}
