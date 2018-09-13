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
        $subject->action();
    }
}
