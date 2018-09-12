<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/12 15:53
 */

namespace DesignPatterns\Structural\Decorator;

abstract class BookingDecorator implements Booking
{
    /**
     * @var Booking
     */
    protected $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}
