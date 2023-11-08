<?php
function isBlangram($word) {
    // Usuń spacje i zamień na małe litery, aby uniknąć problemów z wielkością liter.
    $word = strtolower(str_replace(' ', '', $word));

    // Lista samogłosk w alfabecie angielskim.
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    // Sprawdź, czy słowo zawiera tylko spółgłoski.
    for ($i = 0; $i < strlen($word); $i++) {
        $letter = $word[$i];
        if (in_array($letter, $vowels)) {
            return false; // Znaleziono samogłoskę, to nie jest blangram.
        }
    }

    return true; // Nie znaleziono samogłoski, to jest blangram.
}

// Przykładowe użycie:
$word = "rhythm";
if (isBlangram($word)) {
    echo "To jest blangram!";
} else {
    echo "To nie jest blangram.";
}

?>
