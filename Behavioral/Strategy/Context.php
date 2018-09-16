<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 15:14
 */

namespace DesignPatterns\Behavioral\Strategy;

class Context
{
    private $comparator;

    public function __construct(Comparator $comparator)
    {
        $this->comparator = $comparator;
    }

    public function handle(array $elements)
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}
