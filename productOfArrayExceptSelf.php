<?php

// https://leetcode.com/problems/product-of-array-except-self/?envType=study-plan-v2&envId=top-interview-150

// Initialize three vectors: left_products, right_products, and answer, each of size n, where n is the length of the input array nums.
// Populate left_products such that left_products[i] stores the product of all elements to the left of nums[i], excluding nums[i] itself.
// Populate right_products similarly, such that right_products[i] stores the product of all elements to the right of nums[i], excluding nums[i] itself.
// Construct the answer array such that answer[i] = left_products[i] * right_products[i].
// Return the answer array.

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums)
    {
        $lastArrayMember = count($nums) - 1;
        $leftProducts = $nums;
        $rightProducts = $nums;
        $result = [];
        for ($i = 0, $j = $lastArrayMember; $i <= $lastArrayMember; $i++, $j--) {
            $leftProducts[$i] = isset($leftProducts[$i - 1]) ? $nums[$i - 1] * $leftProducts[$i - 1] : 1;
            $rightProducts[$j] = isset($rightProducts[$j + 1]) ? $nums[$j + 1] * $rightProducts[$j + 1] : 1;
        }
        foreach($nums as $index => $value){
            $result[] = $leftProducts[$index] * $rightProducts[$index];
        }
        return $result;
    }
}

$solution = new Solution();
$mainArray = [1, 2, 3, 4];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->productExceptSelf($mainArray))) . PHP_EOL;
$mainArray = [-1, 1, 0, -3, 3];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->productExceptSelf($mainArray))) . PHP_EOL;
$mainArray = [4, 5];
echo (json_encode($mainArray)) . PHP_EOL;
echo (json_encode($solution->productExceptSelf($mainArray))) . PHP_EOL;
