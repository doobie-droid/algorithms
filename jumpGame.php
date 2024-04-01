<?php

// https://leetcode.com/problems/jump-game/?envType=study-plan-v2&envId=top-interview-150


// Imagine you have a car, and you have some distance to travel (the length of the array). This car has some amount of gasoline, and as long as it has gasoline, it can keep traveling on this road (the array). Every time we move up one element in the array, we subtract one unit of gasoline. However, every time we find an amount of gasoline that is greater than our current amount, we "gas up" our car by replacing our current amount of gasoline with this new amount. We keep repeating this process until we either run out of gasoline (and return false), or we reach the end with just enough gasoline (or more to spare), in which case we return true.
// Note: We can let our gas tank get to zero as long as we are able to gas up at that immediate location (element in the array) that our car is currently at.
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    public function canJump($nums)
    {
       
        $gasLevel = 0;

        foreach($nums as $gasStop){
            if($gasLevel < 0){
                return false;
            }
            if ($gasStop > $gasLevel){
                $gasLevel = $gasStop;
            }
            $gasLevel--;

        }
        return true;
    }
}

$solution = new Solution();
$nums = [2, 3, 1, 1, 4];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->canJump($nums)) . PHP_EOL;
$nums = [3, 2, 1, 0, 4];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->canJump($nums)) . PHP_EOL;
$nums = [3, 2, 1, 2, 1, 2, 0, 4];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->canJump($nums)) . PHP_EOL;
$nums = [0];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->canJump($nums)) . PHP_EOL;
$nums = [2,5,0,0];
echo (json_encode($nums)) . PHP_EOL;
echo ($solution->canJump($nums)) . PHP_EOL;
