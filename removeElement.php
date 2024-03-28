<?php
// Given an integer array nums sorted in non-decreasing order, remove the duplicates in-place such that each unique element appears only once. The relative order of the elements should be kept the same. Then return the number of unique elements in nums.

// Consider the number of unique elements of nums to be k, to get accepted, you need to do the following things:

// Change the array nums such that the first k elements of nums contain the unique elements in the order they were present in nums initially. The remaining elements of nums are not important as well as the size of nums.
// Return k.
// Custom Judge:
// Example 1:

// Input: nums = [1,1,2]
// Output: 2, nums = [1,2,_]
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
                $nums[$i] = 194;
            }else{
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
echo ($solution->removeElement($nums, $val));
var_dump($nums);
