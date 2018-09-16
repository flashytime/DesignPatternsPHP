<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 13:31
 */

namespace DesignPatterns\Behavioral\Observer;

use SplSubject;

class UserActionObserver implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        echo 'I am Observer, I observed user ' . ($subject->logged ? 'login' : 'logout') . '.' . PHP_EOL;
    }
}
