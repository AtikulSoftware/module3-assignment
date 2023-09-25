<?php
//Task 1: String Manipulation

function modifyText($text) {

    // Convert the string to all lowercase.
    $modifiedText = strtolower($text);

    // Replace "brown" with "red" in the string.
    $modifiedText = str_replace("brown", "red", $modifiedText);

    // Print the modified text.
    echo $modifiedText;
}

// Input string
$text = "The quick brown fox jumps over the lazy dog.";

// Call the function
modifyText($text);
