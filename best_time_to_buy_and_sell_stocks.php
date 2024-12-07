<?php
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        // Initialize variables to keep track of the minimum price and maximum profit
        $minPrice = PHP_INT_MAX;
        $maxProfit = 0;

        // Loop through each price in the array
        foreach ($prices as $price) {
            // If the current price is less than the minimum price, update the minimum price
            if ($price < $minPrice) {
                $minPrice = $price;
            }
            // Calculate the potential profit if we sell at the current price
            $profit = $price - $minPrice;
            // If the calculated profit is greater than the maximum profit, update the maximum profit
            if ($profit > $maxProfit) {
                $maxProfit = $profit;
            }
        }

        // Return the maximum profit found
        return $maxProfit;
    }
}

// Example usage:
$solution = new Solution();
$prices = [7, 1, 5, 3, 6, 4];
echo $solution->maxProfit($prices); // Output: 5
?>