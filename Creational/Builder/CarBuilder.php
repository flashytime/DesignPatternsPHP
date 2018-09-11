<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 20:46
 */

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use DesignPatterns\Creational\Builder\Vehicle\Car;
use DesignPatterns\Creational\Builder\Vehicle\Vehicle;

class CarBuilder implements Builder
{
    /**
     * @var Car
     */
    private $car;

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheel1', new Wheel());
        $this->car->setPart('wheel2', new Wheel());
        $this->car->setPart('wheel3', new Wheel());
        $this->car->setPart('wheel4', new Wheel());
    }

    public function addDoor()
    {
        $this->car->setPart('door1', new Door());
        $this->car->setPart('door2', new Door());
        $this->car->setPart('door3', new Door());
        $this->car->setPart('door4', new Door());
    }

    /**
     * @return Vehicle
     */
    public function getVehicle()
    {
        return $this->car;
    }
}
