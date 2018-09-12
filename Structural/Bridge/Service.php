<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/12 20:11
 */

namespace DesignPatterns\Structural\Bridge;

abstract class Service
{
    /**
     * @var Formatter
     */
    protected $formatter;

    public function __construct(Formatter $formatter)
    {
        $this->formatter = $formatter;
    }

    public function setFormatter(Formatter $formatter)
    {
        $this->formatter = $formatter;
    }

    abstract public function get();
}
