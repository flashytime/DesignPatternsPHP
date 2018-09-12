<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/12 17:49
 */

namespace DesignPatterns\Structural\Adapter;

class Kindle implements EBookInterface
{
    private $page = 1;
    private $totalPage = 100;

    public function unlock()
    {

    }

    public function pressNext()
    {
        $this->page ++;
    }

    /**
     * @return array
     */
    public function getPage()
    {
        return [$this->page, $this->totalPage];
    }
}
