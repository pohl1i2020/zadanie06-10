<?php
function areAnagrams($word1, $word2) {
    // Usuń spacje i zamień na małe litery, aby uniknąć problemów z wielkością liter.
    $word1 = strtolower(str_replace(' ', '', $word1));
    $word2 = strtolower(str_replace(' ', '', $word2));

    // Sortuj litery w obu słowach.
    $sortedWord1 = str_split($word1);
    sort($sortedWord1);
    $sortedWord2 = str_split($word2);
    sort($sortedWord2);

    // Porównaj posortowane słowa.
    if (implode($sortedWord1) === implode($sortedWord2)) {
        return true; // Słowa są anagramami.
    } else {
        return false; // Słowa nie są anagramami.
    }
}

// Przykładowe użycie:
$word1 = "kebab";
$word2 = "babek";
if (areAnagrams($word1, $word2)) {
    echo "To są anagramy!";
} else {
    echo "To nie są anagramy.";
}

?>
