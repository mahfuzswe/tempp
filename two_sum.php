<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        // Initialize an associative array to store the indices of the numbers
        $map = [];

        // Loop through each number in the array
        for ($i = 0; $i < count($nums); $i++) {
            // Calculate the complement of the current number
            $complement = $target - $nums[$i];

            // Check if the complement exists in the map
            if (isset($map[$complement])) {
                // If it exists, return the indices of the complement and the current number
                return [$map[$complement], $i];
            }

            // Otherwise, add the current number and its index to the map
            $map[$nums[$i]] = $i;
        }

        // If no solution is found, return an empty array (this line should never be reached if the input is valid)
        return [];
    }
}

// Example usage:
$solution = new Solution();
$nums = [2, 7, 11, 15];
$target = 9;
print_r($solution->twoSum($nums, $target)); // Output: [0, 1]

$nums = [3, 2, 4];
$target = 6;
print_r($solution->twoSum($nums, $target)); // Output: [1, 2]

$nums = [3, 3];
$target = 6;
print_r($solution->twoSum($nums, $target)); // Output: [0, 1]
?>