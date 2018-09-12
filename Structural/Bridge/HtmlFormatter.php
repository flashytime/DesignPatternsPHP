<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/12 20:09
 */

namespace DesignPatterns\Structural\Bridge;

class HtmlFormatter implements Formatter
{
    public function format($text)
    {
        return "<p>$text</p>";
    }
}
