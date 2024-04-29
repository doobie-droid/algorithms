<?php

// https://leetcode.com/problems/best-time-to-buy-and-sell-stock-ii/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    public function maxProfit($prices)
    {
        $finalBuyingDay = count($prices) - 1;
        $totalMaxProfit = 0;
        foreach ($prices as $today => $price) {
            $tomorrow = $today + 1;
            if ($today < $finalBuyingDay && $prices[$tomorrow] > $prices[$today]) {
                $buyPrice = $prices[$today];
                $sellPrice = $prices[$tomorrow];
                $profit = $sellPrice - $buyPrice;
                $totalMaxProfit += $profit;
            }
        }
        return $totalMaxProfit;
    }
}

$solution = new Solution();
$nums = [7, 1, 5, 3, 6, 4];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->maxProfit($nums)) . PHP_EOL;
$nums = [1, 2, 3, 4, 5];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->maxProfit($nums)) . PHP_EOL;
$nums =  [7, 6, 4, 3, 1];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->maxProfit($nums)) . PHP_EOL;
