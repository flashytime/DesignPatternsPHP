<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/13 20:18
 */

namespace DesignPatterns\Structural\Proxy;

class ProxySubject implements Subject
{
    private $realSubject = null;

    public function __construct()
    {
    }

    public function action()
    {
        $this->beforeAction();

        if (is_null($this->realSubject)) {
            $this->realSubject = new RealSubject();
        }
        $this->realSubject->action();

        $this->afterAction();
    }

    private function beforeAction()
    {
        echo 'do sth before action' . PHP_EOL;
    }

    private function afterAction()
    {
        echo 'do sth after action' . PHP_EOL;
    }
}
