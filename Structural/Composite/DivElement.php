<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/14 17:40
 */

namespace DesignPatterns\Structural\Composite;

class DivElement implements Renderable
{
    private $element;

    public function __construct(Renderable $element)
    {
        $this->element = $element;
    }

    public function render()
    {
        return '<div>' . $this->element->render() . '</div>';
    }
}
