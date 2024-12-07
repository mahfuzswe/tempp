<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        // Initialize variables for the candidate and count
        $candidate = null;
        $count = 0;

        // Loop through each number in the array
        foreach ($nums as $num) {
            // If count is zero, set the current number as the candidate
            if ($count == 0) {
                $candidate = $num;
            }

            // Increment or decrement the count based on whether the current number is the candidate
            $count += ($num == $candidate) ? 1 : -1;
        }

        // Return the candidate, which is the majority element
        return $candidate;
    }
}

// Example usage:
$solution = new Solution();
$nums = [3, 2, 3];
echo $solution->majorityElement($nums); // Output: 3

$nums = [2, 2, 1, 1, 1, 2, 2];
echo $solution->majorityElement($nums); // Output: 2
?>