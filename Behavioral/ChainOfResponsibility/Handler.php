<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 17:16
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

abstract class Handler
{
    /**
     * @var Handler
     */
    private $handler;

    /**
     * @var string
     */
    protected $handlerName;

    public function __construct($handleName)
    {
        $this->handlerName = $handleName;
    }

    public function setNext(Handler $handler)
    {
        $this->handler = $handler;

        return $this;
    }

    final public function handle(Request $request)
    {
        echo $this->handlerName . " is processing..." . PHP_EOL;
        $processed = $this->process($request);

        if ($processed === null) {
            $processed = $this->handler->handle($request);
        }

        return $processed;
    }

    /**
     * 处理方法
     * @param Request $request
     * @return mixed
     */
    abstract protected function process(Request $request);

    /**
     * 处理成功
     * @param Request $request
     * @return bool
     */
    protected function success(Request $request)
    {
        echo $request->getName() . "'s request was passed." . PHP_EOL;
        return true;
    }
}
