<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 15:53
 */

namespace DesignPatterns\Behavioral\State;

class StateDone implements State
{
    public function proceedNext(OrderContext $context)
    {
    }

    public function toString()
    {
        return 'done';
    }
}
