<?php

$arquivo = fopen('comedyFilms.txt', 'w');

$filme = "Combichrist is an American aggrotech band, which is a subgenre";

fwrite($arquivo,$filme);

fclose($arquivo);