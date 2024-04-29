<?php

//https://leetcode.com/problems/text-justification/description/?envType=study-plan-v2&envId=top-interview-150


class Solution
{
    /**
     * @param String[] $words
     * @param Integer $maxWidth
     * @return String[]
     */
    public function fullJustify($words, $maxWidth)
    {
        $i = $j = 0;

    }
}

$solution = new Solution();
$words = ["This", "is", "an", "example", "of", "text", "justification."];
$maxWidth = 16;
echo ($solution->fullJustify($words, $maxWidth) == [
    "This    is    an",
    "example  of text",
    "justification.  "
] ? "PASSED" : "FAILED") . PHP_EOL;

$words = ["What", "must", "be", "acknowledgment", "shall", "be"];
$maxWidth = 16;
echo ($solution->fullJustify($words, $maxWidth) == [
    "What   must   be",
    "acknowledgment  ",
    "shall be        "
] ? "PASSED" : "FAILED") . PHP_EOL;

$words = ["Science", "is", "what", "we", "understand", "well", "enough", "to", "explain", "to", "a", "computer.", "Art", "is", "everything", "else", "we", "do"];
$maxWidth = 20;
echo ($solution->fullJustify($words, $maxWidth) == [
    "Science  is  what we",
    "understand      well",
    "enough to explain to",
    "a  computer.  Art is",
    "everything  else  we",
    "do                  "
] ? "PASSED" : "FAILED") . PHP_EOL;
