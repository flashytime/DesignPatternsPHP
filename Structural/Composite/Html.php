<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/14 17:35
 */

namespace DesignPatterns\Structural\Composite;

class Html implements Renderable
{
    /**
     * @var Renderable[]
     */
    private $elements;

    public function render()
    {
        $html = '<html>';

        foreach ($this->elements as $element) {
            $html .= $element->render();
        }
        $html .= '</html>';

        return $html;
    }

    public function addElement(Renderable $element)
    {
        $this->elements[] = $element;
    }

    public function removeElement(Renderable $element)
    {
        foreach ($this->elements as $key => $row) {
            if ($element == $row) {
                unset($this->elements[$key]);
            }
        }
    }
}
