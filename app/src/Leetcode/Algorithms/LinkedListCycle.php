<?php

namespace Src\Leetcode\Algorithms;
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}

class LinkedListCycle
{
    /**
     * @param ListNode $head
     * @return Boolean
     */
    public function withoutArray(ListNode $head): bool
    {
        $begin = $head;
        $cycle = $head;

        if($head === null || $head->next === null)
        {
            return false;
        }

        while($begin && $cycle)
        {
            $begin = $begin->next;
            $cycle = $cycle->next->next;

            if($begin === $cycle)
            {
                return true;
            }
        }
        return false;
    }

    /**
     * @param ListNode $head
     * @return Boolean
     */
    public function withArray(ListNode $head): bool
    {
        $nodes = [];
        $curr = $head;
        while ($curr) {
            ++$nodes[spl_object_id($curr)];
            if ($nodes[spl_object_id($curr)] > 1) {
                return true;
            }
            $curr = $curr->next;
        }

        return false;
    }

}