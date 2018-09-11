<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 20:51
 */

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use DesignPatterns\Creational\Builder\Vehicle\Truck;
use DesignPatterns\Creational\Builder\Vehicle\Vehicle;

class TruckBuilder implements Builder
{
    /**
     * @var Truck
     */
    private $truck;

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function addEngine()
    {
        $this->truck->setPart('engine', new Engine());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function addDoor()
    {
        $this->truck->setPart('door1', new Door());
        $this->truck->setPart('door2', new Door());
    }

    /**
     * @return Vehicle
     */
    public function getVehicle()
    {
        return $this->truck;
    }
}
