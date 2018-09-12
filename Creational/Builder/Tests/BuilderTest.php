<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/12 16:59
 */

namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\TruckBuilder;
use DesignPatterns\Creational\Builder\Vehicle\Car;
use DesignPatterns\Creational\Builder\Vehicle\Truck;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testBuildCar()
    {
        $carBuilder = new CarBuilder();
        $car = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $car);
    }

    public function testBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $truck = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $truck);
    }
}