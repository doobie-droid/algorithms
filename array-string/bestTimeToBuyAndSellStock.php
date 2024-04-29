<?php

// https://leetcode.com/problems/best-time-to-buy-and-sell-stock/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    public function maxProfit($prices)
    {
        $lowestPriceBeforeDay = $prices[0];
        $hashMapOfMaxProfits = [];
        foreach($prices as $index => $priceToday) {
            $lowestPriceBeforeDay = $priceToday < $lowestPriceBeforeDay ? $priceToday : $lowestPriceBeforeDay;
            $hashMapOfMaxProfits[$index] = $priceToday - $lowestPriceBeforeDay;
        }
        return max($hashMapOfMaxProfits);
    }
}

$solution = new Solution();
$nums = [7, 1, 5, 3, 6, 4];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->maxProfit($nums)) . PHP_EOL;
$nums =  [7, 6, 4, 3, 1];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->maxProfit($nums)) . PHP_EOL;
$nums = [1, 2, 1, 4, 3, 2, 2, 9];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->maxProfit($nums)) . PHP_EOL;
