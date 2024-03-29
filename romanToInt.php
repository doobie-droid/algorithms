<?php

// https://leetcode.com/problems/roman-to-integer/description/

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s)
    {
        $hashMap = ["I" => 1, "V" => 5, "X" => 10, "L" => 50, "C" => 100, "D" => 500, "M" => 1000, "IV" => 4, "IX" => 9, "XL" => 40, "XC" => 90, "CD" => 400, "CM" => 900];
        if (!$s) {
            return 0;
        }
        $firstTwoLetters = substr($s, 0, 2);
        if (strlen($firstTwoLetters) == 2 && isset($hashMap[$firstTwoLetters])) {
            return $hashMap[$firstTwoLetters] + $this->romanToInt(substr($s, 2));
        }
        $firstLetter = $s[0];
        return $hashMap[$firstLetter] + $this->romanToInt(substr($s, 1));
    }
    public function romanToInt1($s)
    {
        $romanToIntMap = array(
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        );

        $result = 0;
        $prevValue = 0;

        for ($i = strlen($s) - 1; $i >= 0; $i--) {
            $currentValue = $romanToIntMap[$s[$i]];

            if ($currentValue < $prevValue) {
                $result -= $currentValue;
            } else {
                $result += $currentValue;
            }

            $prevValue = $currentValue;
        }

        return $result;
    }
}



$solution = new Solution();
$s = "III";
$target = 8;
echo ($s) . PHP_EOL;
echo ($solution->romanToInt($s)) . PHP_EOL;
$s = "LVIII";
echo ($s) . PHP_EOL;
echo ($solution->romanToInt($s)) . PHP_EOL;
$s = "MCMXCIV";
echo ($s) . PHP_EOL;
echo ($solution->romanToInt($s)) . PHP_EOL;
