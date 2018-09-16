<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/14 18:38
 */

namespace DesignPatterns\Structural\Composite\Tests;

use DesignPatterns\Structural\Composite\DivElement;
use DesignPatterns\Structural\Composite\Html;
use DesignPatterns\Structural\Composite\SpanElement;
use DesignPatterns\Structural\Composite\TextElement;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testHtml()
    {
        $html = new Html();

        $html->addElement(new TextElement('Text'));
        $html->addElement(new SpanElement(new TextElement('Span Text')));
        $html->addElement(new DivElement(new SpanElement(new TextElement('Div Span Text'))));
        $html->addElement(new DivElement(new DivElement(new SpanElement(new TextElement('Div Div Span Text')))));

        $this->assertEquals('<html>Text<span>Span Text</span><div><span>Div Span Text</span></div><div><div><span>Div Div Span Text</span></div></div></html>', $html->render());
    }
}
