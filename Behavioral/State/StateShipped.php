<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 15:53
 */

namespace DesignPatterns\Behavioral\State;

class StateShipped implements State
{
    public function proceedNext(OrderContext $context)
    {
        $context->setState(new StateDone());
    }

    public function toString()
    {
        return 'shipped';
    }
}
