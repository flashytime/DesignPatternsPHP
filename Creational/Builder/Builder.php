<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 20:45
 */

namespace DesignPatterns\Creational\Builder;

interface Builder
{
    public function createVehicle();

    public function addEngine();

    public function addWheel();

    public function addDoor();

    public function getVehicle();
}
