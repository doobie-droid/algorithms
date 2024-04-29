<?php

// Given an integer array nums and an integer val, remove all occurrences of val in nums in-place. The order of the elements may be changed. Then return the number of elements in nums which are not equal to val.

// Consider the number of elements in nums which are not equal to val be k, to get accepted, you need to do the following things:

// Change the array nums such that the first k elements of nums contain the elements which are not equal to val. The remaining elements of nums are not important as well as the size of nums.
// Return k.

// Input: nums = [3,2,2,3], val = 3
// Output: 2, nums = [2,2,_,_]
// Explanation: Your function should return k = 2, with the first two elements of nums being 2.
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    public function removeElement(&$nums, $val)
    {
        $k = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] == $val) {
                $nums[$i] = "_";
            } else {
                $k++;
            }
        }
        sort($nums);
        return $k;
    }

    public function removeElement1(&$nums, $val)
    {
        $k = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] == $val) {
                $nums[$i] = 194;
            } else {
                $k++;
            }
        }
        sort($nums);
        return $k;
    }
}

$nums = [0, 1, 2, 2, 3, 0, 4, 2];
$val = 2;

$solution = new Solution();
echo($solution->removeElement($nums, $val));
var_dump($nums);
