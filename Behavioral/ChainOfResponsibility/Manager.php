<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 17:27
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class Manager extends Handler
{
    protected function process(Request $request)
    {
        if ($request->getDay() > 1 && $request->getDay() <= 3) {
            return $this->success($request);
        }

        return null;
    }
}
