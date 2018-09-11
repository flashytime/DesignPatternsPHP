<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 17:07
 */

namespace DesignPatterns\Creational\FactoryMethod;

interface LoggerFactory
{
    /**
     * @return Logger
     */
    public function createLogger();
}