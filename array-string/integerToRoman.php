<?php

// https://leetcode.com/problems/integer-to-roman/?envType=study-plan-v2&envId=top-interview-150

class Solution
{
    /**
     * @param Integer $num
     * @return String
     */
    public function intToRoman($num)
    {
        $units = ["","I","II","III",'IV',"V","VI","VII","VIII","IX"];
        $tens = ["","X","XX","XXX","XL",'L',"LX","LXX","LXXX","XC"];
        $hundreds = ["","C","CC","CCC",'CD',"D","DC","DCC","DCCC","CM"];
        $thousands = ["","M","MM","MMM"];
        return $thousands[($num / 1000)]. $hundreds[($num % 1000) / 100]. $tens[($num % 100) / 10]. $units[($num % 10)];
    }
}

$solution = new Solution();
$num = 3;
echo ($solution->intToRoman($num) == "III" ? "PASSED" : "FAILED") . PHP_EOL;
$num = 58;
echo ($solution->intToRoman($num) == "LVIII" ? "PASSED" : "FAILED") . PHP_EOL;
$num = 1994;
echo ($solution->intToRoman($num) == "MCMXCIV" ? "PASSED" : "FAILED") . PHP_EOL;
$num = 1000;
echo ($solution->intToRoman($num) == "M" ? "PASSED" : "FAILED") . PHP_EOL;
$num = 1200;
echo ($solution->intToRoman($num) == "MCC" ? "PASSED" : "FAILED") . PHP_EOL;
$num = 1240;
echo ($solution->intToRoman($num) == "MCCXL" ? "PASSED" : "FAILED") . PHP_EOL;
