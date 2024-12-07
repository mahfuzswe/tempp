<?php
function isValid($s) {
    $stack = [];
    $map = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        if (in_array($char, $map)) {
            $topElement = empty($stack) ? '#' : array_pop($stack);
            if ($topElement != $map[$char]) {
                return false;
            }
        } else {
            array_push($stack, $char);
        }
    }

    return empty($stack);
}

// Example usage:
$s = "()[]{}";
var_dump(isValid($s)); // Output: bool(true)
?>