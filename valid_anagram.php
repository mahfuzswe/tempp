<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        // If the lengths of the strings are different, they cannot be anagrams
        if (strlen($s) != strlen($t)) {
            return false;
        }

        // Initialize an array to count the frequency of each character in $s
        $count = array_fill(0, 26, 0);

        // Count the frequency of each character in $s
        for ($i = 0; $i < strlen($s); $i++) {
            $count[ord($s[$i]) - ord('a')]++;
        }

        // Subtract the frequency of each character in $t
        for ($i = 0; $i < strlen($t); $i++) {
            $count[ord($t[$i]) - ord('a')]--;
            // If the count goes negative, it means the characters do not match
            if ($count[ord($t[$i]) - ord('a')] < 0) {
                return false;
            }
        }

        // If all counts are zero, the strings are anagrams
        return true;
    }
}

// Example usage:
$solution = new Solution();
$s = "anagram";
$t = "nagaram";
echo $solution->isAnagram($s, $t) ? 'true' : 'false'; // Output: true

$s = "rat";
$t = "car";
echo $solution->isAnagram($s, $t) ? 'true' : 'false'; // Output: false
?>