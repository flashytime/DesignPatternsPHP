<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 15:48
 */

namespace DesignPatterns\Behavioral\State;

class OrderContext
{
    /**
     * @var State
     */
    private $state;

    public static function create()
    {
        $order = new self();
        $order->state = new StateCreated();

        return $order;
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function proceedNext()
    {
        $this->state->proceedNext($this);
    }

    public function toString()
    {
        return $this->state->toString();
    }
}
