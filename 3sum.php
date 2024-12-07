<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        // Sort the array to make it easier to avoid duplicates and use two pointers
        sort($nums);
        $result = [];
        $n = count($nums);

        // Loop through each number in the array
        for ($i = 0; $i < $n - 2; $i++) {
            // Skip duplicate numbers to avoid duplicate triplets
            if ($i > 0 && $nums[$i] == $nums[$i - 1]) {
                continue;
            }

            // Use two pointers to find the other two numbers
            $left = $i + 1;
            $right = $n - 1;

            while ($left < $right) {
                $sum = $nums[$i] + $nums[$left] + $nums[$right];

                if ($sum == 0) {
                    // If the sum is zero, add the triplet to the result
                    $result[] = [$nums[$i], $nums[$left], $nums[$right]];

                    // Move the left pointer to the right, skipping duplicates
                    while ($left < $right && $nums[$left] == $nums[$left + 1]) {
                        $left++;
                    }
                    $left++;

                    // Move the right pointer to the left, skipping duplicates
                    while ($left < $right && $nums[$right] == $nums[$right - 1]) {
                        $right--;
                    }
                    $right--;
                } elseif ($sum < 0) {
                    // If the sum is less than zero, move the left pointer to the right
                    $left++;
                } else {
                    // If the sum is greater than zero, move the right pointer to the left
                    $right--;
                }
            }
        }

        return $result;
    }
}

// Example usage:
$solution = new Solution();
$nums = [-1, 0, 1, 2, -1, -4];
print_r($solution->threeSum($nums)); // Output: [[-1, -1, 2], [-1, 0, 1]]

$nums = [];
print_r($solution->threeSum($nums)); // Output: []

$nums = [0];
print_r($solution->threeSum($nums)); // Output: []
?>