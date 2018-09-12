<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/12 15:55
 */

namespace DesignPatterns\Structural\Decorator;

class Wifi extends BookingDecorator
{
    const PRICE = 10;

    public function calculatePrice()
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription()
    {
        return $this->booking->getDescription() . ' with wifi';
    }
}
