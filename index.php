<?php
    function testAge($age) {
        if ($age < 16) {
            return "${age} jaar is te jong voor deze film." . PHP_EOL;
        } else if ($age >= 16 && $age < 18) {
            return "${age} jaar, je hebt ouderlijk toezicht nodig." . PHP_EOL;
        } else if ($age >= 18) {
            return "Je bent al ${age} jaar. Geniet van de film!" . PHP_EOL;
        } 
    };

for ($i = 15; $i <= 21; ++$i) {
    echo testAge($i),('<br>'), PHP_EOL;
};