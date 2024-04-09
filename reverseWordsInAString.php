<?php

// https://leetcode.com/problems/reverse-words-in-a-string/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {
        $s = trim($s);
        $startIndex = 0;
        $endIndex = 0;
        $solutionArray = [];
        $solutionCharacter = "";
        $stringCount = strlen($s);
        for ($index = 0; $index < $stringCount; $index++) {
            $character = $s[$index];
            $previousCharacter = isset($s[$index - 1]) ?  $s[$index - 1] : " ";
            $nextCharacter = isset($s[$index + 1]) ?  $s[$index + 1] : " ";
            if ($character != " " && $previousCharacter == " "  ) {
                $startIndex = $index;
            }
            if ($character != " " && $nextCharacter == " ") {
                $endIndex = $index + 1;

                array_unshift($solutionArray, substr($s, $startIndex, $endIndex - $startIndex));
            }
        }
        echo json_encode($solutionArray).PHP_EOL;
        foreach($solutionArray as $char){
            $solutionCharacter .= $char." ";
        }
        return trim($solutionCharacter);
    }
}

$solution = new Solution();
$num = "the sky is blue";
echo ($solution->reverseWords($num) == "blue is sky the" ? "PASSED" : "FAILED") . PHP_EOL;
$num = "  hello world  ";
echo ($solution->reverseWords($num) == "world hello" ? "PASSED" : "FAILED") . PHP_EOL;
$num = "a good   example";
echo ($solution->reverseWords($num) == "example good a" ? "PASSED" : "FAILED") . PHP_EOL;
