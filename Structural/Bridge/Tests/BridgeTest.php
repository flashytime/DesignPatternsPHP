<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/12 20:13
 */

namespace DesignPatterns\Structural\Bridge\Tests;

use DesignPatterns\Structural\Bridge\HtmlFormatter;
use DesignPatterns\Structural\Bridge\PlainTextFormatter;
use DesignPatterns\Structural\Bridge\TestService;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testFormatter()
    {
        $service = new TestService(new HtmlFormatter());
        $this->assertEquals('<p>test</p>', $service->get());

        $service->setFormatter(new PlainTextFormatter());
        $this->assertEquals('test', $service->get());
    }
}
