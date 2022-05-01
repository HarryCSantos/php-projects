<?php

$idadeList = [22, 12, 15, 43, 53, 5];

$idadeList[count($idadeList)] = 20;

foreach ($idadeList as $idade) {
    echo $idade .PHP_EOL;
}