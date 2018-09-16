<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 14:31
 */

namespace DesignPatterns\Behavioral\TemplateMethod;

class CityJourney extends Journey
{
    protected function enjoyVacation()
    {
        return 'Eat, drink, take photos and sleep';
    }

    protected function buyGift()
    {
        return 'Buy a gift';
    }
}
