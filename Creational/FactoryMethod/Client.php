<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 17:11
 */

namespace DesignPatterns\Creational\FactoryMethod;

class Client
{
    public function main()
    {
        $message = 'test';

        $stdoutLoggerFactory = new StdoutLoggerFactory();
        $stdoutLogger = $stdoutLoggerFactory->createLogger();
        $stdoutLogger->log($message);

        $filePath = '/tmp/log.txt';
        $fileLoggerFactory = new FIleLoggerFactory($filePath);
        $fileLogger = $fileLoggerFactory->createLogger();
        $fileLogger->log($message);
    }
}
