<?php
// https://leetcode.com/problems/remove-duplicates-from-sorted-array/description/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $k = 0;
        $hashTable = array();
        for ($i = 0; $i < count($nums); $i++) {
            if (isset($hashTable[$nums[$i]])) {
                $nums[$i] = "_";
            } else {
                $hashTable[$nums[$i]] = true;
                $k++;
            }
        }
        sort($nums);
        return $k;
    }
}
$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4,4, 9, 10,11,11];
$solution = new Solution() ;

echo PHP_EOL;
echo $solution->removeDuplicates($nums);
echo PHP_EOL;
echo json_encode($nums);