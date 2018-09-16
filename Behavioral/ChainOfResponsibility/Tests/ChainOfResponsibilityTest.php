<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 17:31
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibility\Tests;

use DesignPatterns\Behavioral\ChainOfResponsibility\GeneralManager;
use DesignPatterns\Behavioral\ChainOfResponsibility\Handler;
use DesignPatterns\Behavioral\ChainOfResponsibility\Leader;
use DesignPatterns\Behavioral\ChainOfResponsibility\Manager;
use DesignPatterns\Behavioral\ChainOfResponsibility\Request;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    /**
     * @var Handler
     */
    protected $chain;

    protected function setUp()
    {
        $leader = new Leader('Leader');
        $manager = new Manager('Manager');
        $generalManager = new GeneralManager('General Manager');

        $leader->setNext($manager);
        $manager->setNext($generalManager);

        $this->chain = $leader;
    }

    public function testRequestOneDay()
    {
        $request = new Request();
        $request->setName('flashytime');
        $request->setDay(1);
        $this->expectOutputString('Leader is processing...' . PHP_EOL . 'flashytime\'s request was passed.' . PHP_EOL);
        $this->chain->handle($request);
    }

    public function testRequestTwoDays()
    {
        $request = new Request();
        $request->setName('flashytime');
        $request->setDay(2);
        $this->expectOutputString('Leader is processing...' . PHP_EOL . 'Manager is processing...' . PHP_EOL . 'flashytime\'s request was passed.' . PHP_EOL);
        $this->chain->handle($request);
    }

    public function testRequestFiveDays()
    {
        $request = new Request();
        $request->setName('flashytime');
        $request->setDay(5);
        $this->expectOutputString('Leader is processing...' . PHP_EOL . 'Manager is processing...' . PHP_EOL . 'General Manager is processing...' . PHP_EOL . 'flashytime\'s request was passed.' . PHP_EOL);
        $this->chain->handle($request);
    }
}
