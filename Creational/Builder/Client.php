<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 20:57
 */

namespace DesignPatterns\Creational\Builder;

class Client
{
    public function main()
    {
        $carBuilder = new CarBuilder();
        $car = (new Director())->build($carBuilder);

        $truckBuilder = new TruckBuilder();
        $truck = (new Director())->build($truckBuilder);
    }
}
