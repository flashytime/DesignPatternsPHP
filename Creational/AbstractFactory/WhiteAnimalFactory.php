<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 20:05
 */

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Cat\WhiteCat;
use DesignPatterns\Creational\AbstractFactory\Dog\WhiteDog;

class WhiteAnimalFactory implements AnimalFactory
{
    public function createCat()
    {
        return new WhiteCat();
    }

    public function createDog()
    {
        return new WhiteDog();
    }
}
