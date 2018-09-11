<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 17:10
 */

namespace DesignPatterns\Creational\FactoryMethod;

class FIleLoggerFactory implements LoggerFactory
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * @return FileLogger
     */
    public function createLogger()
    {
        return new FileLogger($this->filePath);
    }
}
