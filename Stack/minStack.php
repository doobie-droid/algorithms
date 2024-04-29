<?php

// https://leetcode.com/problems/min-stack/description/?envType=study-plan-v2&envId=top-interview-150

class MinStack
{
    /**
     */
    function __construct()
    {
    }

    /**
     * @param Integer $val
     * @return NULL
     */
    function push($val)
    {
    }

    /**
     * @return NULL
     */
    function pop()
    {
    }

    /**
     * @return Integer
     */
    function top()
    {
    }

    /**
     * @return Integer
     */
    function getMin()
    {
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($val);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */


$minStack = new MinStack();
$minStack->push(-2);
$minStack->push(0);
$minStack->push(-3);

echo ($minStack->getMin() == -3 ? "PASSED" : "FAILED") . PHP_EOL; 
$minStack->pop();
echo ($minStack->top() == 0 ? "PASSED" : "FAILED") . PHP_EOL; 
$minStack->getMin();