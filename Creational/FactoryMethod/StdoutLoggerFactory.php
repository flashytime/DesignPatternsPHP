<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 17:08
 */

namespace DesignPatterns\Creational\FactoryMethod;

class StdoutLoggerFactory implements LoggerFactory
{
    /**
     * @return StdoutLogger
     */
    public function createLogger()
    {
        return new StdoutLogger();
    }
}
