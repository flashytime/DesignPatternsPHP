<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 15:55
 */

namespace DesignPatterns\Behavioral\State\Tests;

use DesignPatterns\Behavioral\State\OrderContext;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testStateCreated()
    {
        $order = OrderContext::create();

        $this->assertEquals('created', $order->toString());
    }

    public function testStateShipped()
    {
        $order = OrderContext::create();
        $order->proceedNext();

        $this->assertEquals('shipped', $order->toString());
    }

    public function testStateDone()
    {
        $order = OrderContext::create();
        $order->proceedNext();
        $order->proceedNext();

        $this->assertEquals('done', $order->toString());
    }
}
