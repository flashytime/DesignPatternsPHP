<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/14 17:07
 */

namespace DesignPatterns\Structural\Facade;

class SecurityFacade
{
    private $camera;
    private $light;
    private $sensor;
    private $alarm;

    public function __construct()
    {
        $this->camera = new Camera();
        $this->light = new Light();
        $this->sensor = new Sensor();
        $this->alarm = new Alarm();
    }

    public function activate()
    {
        $this->camera->turnOn();
        $this->light->turnOn();
        $this->sensor->activate();
        $this->alarm->activate();
    }

    public function deactivate()
    {
        $this->camera->turnOff();
        $this->light->turnOff();
        $this->sensor->deactivate();
        $this->alarm->deactivate();
    }
}
