<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 20:54
 */

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Vehicle\Vehicle;

class Director
{
    /**
     * @param Builder $builder
     * @return Vehicle
     */
    public function build(Builder $builder)
    {
        $builder->createVehicle();
        $builder->addEngine();
        $builder->addWheel();
        $builder->addDoor();

        return $builder->getVehicle();
    }
}
