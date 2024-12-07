<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
        // Remove duplicates by converting the array to a set
        $nums = array_unique($nums);

        // Sort the array in descending order
        rsort($nums);

        // If there are less than 3 unique numbers, return the maximum number
        if (count($nums) < 3) {
            return $nums[0];
        }

        // Otherwise, return the third maximum number
        return $nums[2];
    }
}

// Example usage:
$solution = new Solution();
$nums = [3, 2, 1];
echo $solution->thirdMax($nums); // Output: 1

$nums = [1, 2];
echo $solution->thirdMax($nums); // Output: 2

$nums = [2, 2, 3, 1];
echo $solution->thirdMax($nums); // Output: 1
?>