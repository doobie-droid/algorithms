<?php

// https://leetcode.com/problems/insert-delete-getrandom-o1/description/?envType=study-plan-v2&envId=top-interview-150

class RandomizedSet
{
    /**
     */
    public $set = [];
    function __construct()
    {
    }

    /**
     * @param Integer $val
     * @return Boolean
     */
    function insert($val)
    {
        if (isset($this->set[$val])) {
            return false;
        }
        $this->set[$val] = $val;
        return true;
    }

    /**
     * @param Integer $val
     * @return Boolean
     */
    function remove($val)
    {
        if (!isset($this->set[$val])) {
            return false;
        }
        unset($this->set[$val]);
        return true;
    }

    /**
     * @return Integer
     */
    function getRandom()
    {
        $randomKey = array_rand($this->set);
        $randomElement = $this->set[$randomKey];
        return $randomElement;
    }
}


//  Your RandomizedSet object will be instantiated and called as such:
$obj = new  RandomizedSet();
echo ($obj->insert(1)) . PHP_EOL;
echo ($obj->remove(2)) . PHP_EOL;
echo ($obj->insert(2)) . PHP_EOL;
echo ($obj->getRandom()) . PHP_EOL;
echo ($obj->remove(1)) . PHP_EOL;
echo ($obj->insert(2)) . PHP_EOL;
echo ($obj->getRandom()) . PHP_EOL;
