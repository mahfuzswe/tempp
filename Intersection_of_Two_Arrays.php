<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        // Convert the first array to a set to remove duplicates
        $set1 = array_unique($nums1);
        // Convert the second array to a set to remove duplicates
        $set2 = array_unique($nums2);

        // Initialize an array to store the intersection
        $intersection = [];

        // Loop through each element in the first set
        foreach ($set1 as $num) {
            // If the element is also in the second set, add it to the intersection array
            if (in_array($num, $set2)) {
                $intersection[] = $num;
            }
        }

        // Return the intersection array
        return $intersection;
    }
}

// Example usage:
$solution = new Solution();
$nums1 = [1, 2, 2, 1];
$nums2 = [2, 2];
print_r($solution->intersection($nums1, $nums2)); // Output: [2]
?>