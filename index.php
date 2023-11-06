<?php

function is_isogram($str) {
    $str = strtolower(trim($str));

    for($i=0;$i<strlen($str);$i++)
    {
        $char=$str[$i];
        if(substr_count($str,$char)>1)
        {
            return"Ten tekst to nie isogram";
        }
    }
    return"Ten tekst to isogram";
}

print(is_isogram("drzwi"));
?>
   
