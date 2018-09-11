<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 20:05
 */

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Cat\Cat;
use DesignPatterns\Creational\AbstractFactory\Dog\Dog;

interface AnimalFactory
{
    /**
     * @return Cat
     */
    public function createCat();

    /**
     * @return Dog
     */
    public function createDog();
}
