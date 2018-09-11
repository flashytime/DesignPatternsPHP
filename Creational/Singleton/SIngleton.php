<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/11 16:27
 */

namespace DesignPatterns\Creational\Singleton;

/**
 * Class Singleton
 */
final class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __clone()
    {
    }
}
