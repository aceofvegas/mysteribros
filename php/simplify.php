<?php 

function getTitle($file_array){
    // Define a regular expression pattern for $head =
    $pattern = '/^\$title =/';

    // Loop through the array and find the matching line
    foreach ($file_array as $line) {
    // If the line matches the pattern
    if (preg_match($pattern, $line)) {
        // Get the value after the quotation mark
        $head2 = substr($line, strpos($line, '"') + 1);

        // Replace the quotation mark and the semicolon with an empty string
        $head2 = str_replace(array('"', ';'), '', $head2);

        // Echo the value of $head2
        return $head2;
    }
    }
}
function getSubTitle($file_array){
    // Define a regular expression pattern for $head =
    $pattern = '/^\$subtitle =/';

    // Loop through the array and find the matching line
    foreach ($file_array as $line) {
    // If the line matches the pattern
    if (preg_match($pattern, $line)) {
        // Get the value after the quotation mark
        $head2 = substr($line, strpos($line, '"') + 1);

        // Replace the quotation mark and the semicolon with an empty string
        $head2 = str_replace(array('"', ';'), '', $head2);

        // Echo the value of $head2
        return $head2;
    }
    }
}
function getImg($file_array){
    // Define a regular expression pattern for $head =
    $pattern = '/^\$img =/';

    // Loop through the array and find the matching line
    foreach ($file_array as $line) {
    // If the line matches the pattern
    if (preg_match($pattern, $line)) {
        // Get the value after the quotation mark
        $head2 = substr($line, strpos($line, '"') + 1);

        // Replace the quotation mark and the semicolon with an empty string
        $head2 = str_replace(array('"', ';','../'), '', $head2);

        // Echo the value of $head2
        return $head2;
    }
    }
}
?>