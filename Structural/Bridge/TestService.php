<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/12 20:12
 */

namespace DesignPatterns\Structural\Bridge;

class TestService extends Service
{
    public function get()
    {
        return $this->formatter->format('test');
    }
}
