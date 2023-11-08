<?php
function isPangram($word) {
    $alphabet = range('a', 'z');
    $word = strtolower($word); // Zamień słowo na małe litery, aby uniknąć problemów z wielkością liter.

    foreach ($alphabet as $letter) {
        if (strpos($word, $letter) === false) {
            return false; // Jeśli nie znaleziono litery, to nie jest pangramem.
        }
    }

    return true; // Znaleziono wszystkie litery, to jest pangramem.
}

// Przykładowe użycie:
$word = "The quick brown fox jumps over the lazy dog";
if (isPangram($word)) {
    echo "To jest pangram!";
} else {
    echo "To nie jest pangram.";
}

?>
