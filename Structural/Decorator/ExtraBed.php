<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/12 15:57
 */

namespace DesignPatterns\Structural\Decorator;

class ExtraBed extends BookingDecorator
{
    const PRICE = 50;

    public function calculatePrice()
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription()
    {
        return $this->booking->getDescription() . ' with extra bed';
    }
}
