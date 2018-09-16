<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 15:16
 */

namespace DesignPatterns\Behavioral\Strategy\Tests;

use DesignPatterns\Behavioral\Strategy\Context;
use DesignPatterns\Behavioral\Strategy\DateComparator;
use DesignPatterns\Behavioral\Strategy\IdComparator;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function provideIntegers()
    {
        return [
            [
                [['id' => 2], ['id' => 1], ['id' => 3]],
                ['id' => 1]
            ],
            [
                [['id' => 10], ['id' => 18], ['id' => 6]],
                ['id' => 6]
            ]
        ];
    }

    public function provideDates()
    {
        return [
            [
                [['date' => '2014-03-03'], ['date' => '2015-03-02'], ['date' => '2013-03-01']],
                ['date' => '2013-03-01'],
            ],
            [
                [['date' => '2014-02-03'], ['date' => '2013-02-01'], ['date' => '2015-02-02']],
                ['date' => '2013-02-01'],
            ],
        ];
    }

    /**
     * @dataProvider provideIntegers
     *
     * @param $collection
     * @param $expected
     */
    public function testIdComparator($collection, $expected)
    {
        $context = new Context(new IdComparator());
        $elements = $context->handle($collection);

        $firstElement = array_shift($elements);
        $this->assertEquals($expected, $firstElement);
    }

    /**
     * @dataProvider provideDates
     *
     * @param $collection
     * @param $expected
     */
    public function testDateComparator($collection, $expected)
    {
        $context = new Context(new DateComparator());
        $elements = $context->handle($collection);

        $firstElement = array_shift($elements);
        $this->assertEquals($expected, $firstElement);
    }
}
