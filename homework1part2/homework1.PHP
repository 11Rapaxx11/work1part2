<?php 


$word = 'i like icecream'; 

preg_match_all('#.#', $word, $numbers, PREG_SET_ORDER);

echo count($numbers);

 ?>