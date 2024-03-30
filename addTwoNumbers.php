<?php


// https://leetcode.com/problems/add-two-numbers/description/

//Problem was solved by adding the members of each of the linked lists on the fly and carrying over a carryover... then reverting the linked list when done

//NOTE: account for edge case where the last number is 9 and you are carrying over a 1 so 9 + 1 = 10... cc line 46
// Definition for a singly-linked list.
class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $listNode = null;
        $currentNode1 = $l1;
        $currentNode2 = $l2;
        $carryOver = 0;
        while ($currentNode1 || $currentNode2) {
            $currentNode1Val = $currentNode1 ? $currentNode1->val : 0;
            $currentNode2Val = $currentNode2 ? $currentNode2->val : 0;
            $sum = ($currentNode1Val + $currentNode2Val + $carryOver) % 10;

            $listNode = new ListNode($sum, $listNode);
            $currentNode1 = $currentNode1 ? $currentNode1->next : null;
            $currentNode2 = $currentNode2 ? $currentNode2->next : null;
            $carryOver = intval(($currentNode1Val + $currentNode2Val + $carryOver) / 10);
            // var_dump($listNode);
        }
        if( $carryOver > 0) {
            $listNode = new ListNode($carryOver, $listNode);
        }
        // return $listNode;
        return $this->revertLinkedList($listNode);
    }

    function revertLinkedList($listNode)
    {
        $prev = null;
        $current = $listNode;
        $next = $listNode->next;
        while($current){
            $current->next = $prev;
            $prev = $current;
            $current = $next;
            $next = $current ? $current->next : null;
        }
        return $prev;
    }
}

//first linked list
$listNode01 = new ListNode(3, null);
$listNode02 = new ListNode(4, $listNode01);
$listNode03 = new ListNode(2, $listNode02);
//Second linked list
$listNode11 = new ListNode(4, null);
$listNode12 = new ListNode(6, $listNode11);
$listNode13 = new ListNode(5, $listNode12);

$solution = new Solution();
var_dump($solution->addTwoNumbers($listNode13, $listNode03));

//first linked list
$listNode01 = new ListNode(0, null);
// second linked list
$listNode11 = new ListNode(0, null);
var_dump($solution->addTwoNumbers($listNode11, $listNode01));

//first linked list
$listNode01 = new ListNode(9, null);
$listNode02 = new ListNode(9, $listNode01);
$listNode03 = new ListNode(9, $listNode02);
$listNode04 = new ListNode(9, $listNode03);
$listNode05 = new ListNode(9, $listNode04);
$listNode06 = new ListNode(9, $listNode05);
$listNode07 = new ListNode(9, $listNode06);

//second linked list
$listNode11 = new ListNode(9, null);
$listNode12 = new ListNode(9, $listNode11);
$listNode13 = new ListNode(9, $listNode12);
$listNode14 = new ListNode(9, $listNode13);
var_dump($solution->addTwoNumbers($listNode14, $listNode07));