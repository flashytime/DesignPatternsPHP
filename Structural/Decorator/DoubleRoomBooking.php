<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/12 15:52
 */

namespace DesignPatterns\Structural\Decorator;

class DoubleRoomBooking implements Booking
{
    /**
     * @return int
     */
    public function calculatePrice()
    {
        return 200;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'double room';
    }
}
