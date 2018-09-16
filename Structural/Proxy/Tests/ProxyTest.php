<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/13 20:22
 */

namespace DesignPatterns\Structural\Proxy\Tests;

use DesignPatterns\Structural\Proxy\ProxySubject;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testProxySubject()
    {
        $subject = new ProxySubject();
        $this->expectOutputString('do sth before action' . PHP_EOL . 'Real Subject' . PHP_EOL . 'do sth after action' . PHP_EOL);
        $subject->action();
    }
}
