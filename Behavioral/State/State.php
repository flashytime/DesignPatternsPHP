<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 15:48
 */

namespace DesignPatterns\Behavioral\State;

interface State
{
    public function proceedNext(OrderContext $context);

    public function toString();
}
