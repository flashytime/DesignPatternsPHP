<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 13:32
 */

namespace DesignPatterns\Behavioral\Observer;

use SplObserver;

class User implements \SplSubject
{
    /**
     * @var \SplObserver[]
     */
    private $observers;

    public $logged = false;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function login()
    {
        echo 'User login...' . PHP_EOL;
        $this->logged = true;
        $this->notify();
    }

    public function logout()
    {
        echo 'User logout...' . PHP_EOL;
        $this->logged = false;
        $this->notify();
    }
}
