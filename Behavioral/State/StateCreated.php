<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 15:49
 */

namespace DesignPatterns\Behavioral\State;

class StateCreated implements State
{
    public function proceedNext(OrderContext $context)
    {
        $context->setState(new StateShipped());
    }

    public function toString()
    {
        return 'created';
    }
}
