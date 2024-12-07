<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Character
     */
    function findTheDifference($s, $t) {
        // Initialize an array to count the frequency of each character in $s
        $count = array_fill(0, 26, 0);

        // Count the frequency of each character in $s
        for ($i = 0; $i < strlen($s); $i++) {
            $count[ord($s[$i]) - ord('a')]++;
        }

        // Subtract the frequency of each character in $t
        for ($i = 0; $i < strlen($t); $i++) {
            $count[ord($t[$i]) - ord('a')]--;
            // If the count goes negative, it means this character is the extra one
            if ($count[ord($t[$i]) - ord('a')] < 0) {
                return $t[$i];
            }
        }

        // This line should never be reached if the input is valid
        return '';
    }
}

// Example usage:
$solution = new Solution();
$s = "abcd";
$t = "abcde";
echo $solution->findTheDifference($s, $t); // Output: "e"
?>