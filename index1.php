<?php

function is_palindrome($word) {
    $word = strtolower(str_replace(' ', '', $word));

    return $word === strrev($word);
}

$word = "kajak";
if (is_palindrome($word)) {
    echo "Słowo \"$word\" jest palindromem.";
} else {
    echo "Słowo \"$word\" nie jest palindromem.";
}
?>
   
