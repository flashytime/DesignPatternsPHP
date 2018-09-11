<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 20:07
 */

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Cat\BlackCat;
use DesignPatterns\Creational\AbstractFactory\Dog\BlackDog;

class BlackAnimalFactory implements AnimalFactory
{
    public function createCat()
    {
        return new BlackCat();
    }

    public function createDog()
    {
        return new BlackDog();
    }
}
