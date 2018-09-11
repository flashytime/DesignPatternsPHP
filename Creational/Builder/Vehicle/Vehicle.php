<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 20:41
 */

namespace DesignPatterns\Creational\Builder\Vehicle;

abstract class Vehicle
{
    /**
     * @var array
     */
    private $parts = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key, $value)
    {
        $this->parts[$key] = $value;
    }
}
