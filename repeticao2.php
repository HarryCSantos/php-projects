<?php

for ($contador = 1; $contador <= 15; $contador += 1){
    if ($contador != 13) { // != significa diferente
        continue;
    }

    echo "$contador" . PHP_EOL;
}