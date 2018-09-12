<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/12 17:02
 */

namespace DesignPatterns\Structural\Decorator\Tests;

use DesignPatterns\Structural\Decorator\DoubleRoomBooking;
use DesignPatterns\Structural\Decorator\ExtraBed;
use DesignPatterns\Structural\Decorator\Wifi;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testDoubleRoomBooking()
    {
        $booking = new DoubleRoomBooking();

        $this->assertEquals(200, $booking->calculatePrice());
        $this->assertEquals('double room', $booking->getDescription());
    }

    public function testDoubleRoomBookingWithWifi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new Wifi($booking);

        $this->assertEquals(210, $booking->calculatePrice());
        $this->assertEquals('double room with wifi', $booking->getDescription());
    }

    public function testDoubleRoomBookingWithWifiAndExtraBed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new Wifi($booking);
        $booking = new ExtraBed($booking);

        $this->assertEquals(260, $booking->calculatePrice());
        $this->assertEquals('double room with wifi with extra bed', $booking->getDescription());
    }
}
