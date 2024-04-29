<?php

// https://leetcode.com/problems/simplify-path/?envType=study-plan-v2&envId=top-interview-150

class Solution
{

    /**
     * @param String $path
     * @return String
     */
    function simplifyPath($path)
    {
        $path = explode('/', $path);
        $stack = [];
        foreach ($path as $folder) {
            if (!$folder || $folder == "." ) {
                continue;
            }
            if($folder == ".."){
                array_pop($stack);
                continue;
            }
            array_push($stack, $folder);
        }
        return "/".implode("/",$stack);
        
    }
}

$solution = new Solution();
$path = "/home/";
echo ($solution->simplifyPath($path) == "/home" ? "PASSED" : "FAILED") . PHP_EOL;


$path = "/../.";
echo ($solution->simplifyPath($path) == "/" ? "PASSED" : "FAILED") . PHP_EOL;

$path = "/home////foo/";
echo ($solution->simplifyPath($path) == "/home/foo" ? "PASSED" : "FAILED") . PHP_EOL;
