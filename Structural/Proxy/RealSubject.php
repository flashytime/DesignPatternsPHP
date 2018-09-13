<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/13 20:17
 */

namespace DesignPatterns\Structural\Proxy;

class RealSubject implements Subject
{
    public function action()
    {
        echo 'Real Subject' . PHP_EOL;
    }
}
