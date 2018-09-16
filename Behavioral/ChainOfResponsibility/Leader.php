<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 17:19
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class Leader extends Handler
{
    protected function process(Request $request)
    {
        if ($request->getDay() <= 1) {
            return $this->success($request);
        }

        return null;
    }
}
