<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/12 15:52
 */

namespace DesignPatterns\Structural\Decorator;

interface Booking
{
    public function calculatePrice();

    public function getDescription();
}
