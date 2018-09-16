<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 13:39
 */

namespace DesignPatterns\Behavioral\Observer\Tests;

use DesignPatterns\Behavioral\Observer\User;
use DesignPatterns\Behavioral\Observer\UserActionObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testUserLogin()
    {
        $observer = new UserActionObserver();

        $user = new User();
        $user->attach($observer);

        $this->expectOutputString('User login...' . PHP_EOL . 'I am Observer, I observed user login.' . PHP_EOL);
        $user->login();
    }
}
