<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 17:28
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class GeneralManager extends Handler
{
    protected function process(Request $request)
    {
        return $this->success($request);
    }
}
