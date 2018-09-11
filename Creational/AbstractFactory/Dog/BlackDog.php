<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 20:03
 */

namespace DesignPatterns\Creational\AbstractFactory\Dog;

class BlackDog implements Dog
{
    public function voice()
    {
        echo '黑狗，汪汪汪～～';
    }
}