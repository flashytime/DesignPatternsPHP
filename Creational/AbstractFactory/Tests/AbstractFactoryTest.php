<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/12 16:51
 */

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\BlackAnimalFactory;
use DesignPatterns\Creational\AbstractFactory\Cat\Cat;
use DesignPatterns\Creational\AbstractFactory\Dog\Dog;
use DesignPatterns\Creational\AbstractFactory\WhiteAnimalFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testWhiteAnimalFactory()
    {
        $whiteAnimalFactory = new WhiteAnimalFactory();
        $cat = $whiteAnimalFactory->createCat();
        $dog = $whiteAnimalFactory->createDog();

        $this->assertInstanceOf(Cat::class, $cat);
        $this->assertInstanceOf(Dog::class, $dog);
    }

    public function testBlackAnimalFactory()
    {
        $blackAnimalFactory = new BlackAnimalFactory();
        $cat = $blackAnimalFactory->createCat();
        $dog = $blackAnimalFactory->createDog();

        $this->assertInstanceOf(Cat::class, $cat);
        $this->assertInstanceOf(Dog::class, $dog);
    }
}
