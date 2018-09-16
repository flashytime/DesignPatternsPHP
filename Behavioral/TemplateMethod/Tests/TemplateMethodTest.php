<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 14:32
 */

namespace DesignPatterns\Behavioral\TemplateMethod\Tests;

use DesignPatterns\Behavioral\TemplateMethod\BeachJourney;
use DesignPatterns\Behavioral\TemplateMethod\CityJourney;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testBeachJourney()
    {
        $beachJourney = new BeachJourney();
        $beachJourney->takeATrip();

        $this->assertEquals(['Buy a flight ticket', 'Taking the plane', 'Swimming and sun-bathing', 'Taking the plane'], $beachJourney->getThingsToDo());
    }

    public function testCityJourney()
    {
        $cityJourney = new CityJourney();
        $cityJourney->takeATrip();

        $this->assertEquals(
            [
                'Buy a flight ticket',
                'Taking the plane',
                'Eat, drink, take photos and sleep',
                'Buy a gift',
                'Taking the plane'
            ],
            $cityJourney->getThingsToDo());
    }
}
