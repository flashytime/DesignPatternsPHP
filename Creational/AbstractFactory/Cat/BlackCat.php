<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 20:02
 */

namespace DesignPatterns\Creational\AbstractFactory\Cat;

class BlackCat implements Cat
{
    public function voice()
    {
        echo '黑猫，喵喵喵～～';
    }
}