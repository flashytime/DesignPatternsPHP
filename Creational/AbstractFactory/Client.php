<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 20:07
 */

namespace DesignPatterns\Creational\AbstractFactory;

class Client
{
    public function main()
    {
        $this->run(new WhiteAnimalFactory());
        $this->run(new BlackAnimalFactory());
    }

    public function run(AnimalFactory $animalFactory)
    {
        $cat = $animalFactory->createCat();
        $cat->voice();

        $dog = $animalFactory->createDog();
        $dog->voice();
    }
}
