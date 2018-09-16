<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/14 18:35
 */

namespace DesignPatterns\Structural\Composite;

class SpanElement implements Renderable
{
    private $element;

    public function __construct(Renderable $element)
    {
        $this->element = $element;
    }

    public function render()
    {
        return '<span>' . $this->element->render() . '</span>';
    }
}
