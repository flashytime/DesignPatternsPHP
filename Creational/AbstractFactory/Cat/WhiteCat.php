<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 20:01
 */

namespace DesignPatterns\Creational\AbstractFactory\Cat;

class WhiteCat implements Cat
{
    public function voice()
    {
        echo '白猫，喵喵喵～～';
    }
}