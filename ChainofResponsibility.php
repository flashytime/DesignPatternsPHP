<?php

/**
 * 责任链模式
 * 使多个对象都有机会处理请求，从而避免请求的发送者和接收者之间的耦合关系
 * 将这些对象练成一条链，并沿着这条链传递该请求，直到有一个对象处理它为止。
 * 示例代码：请假审批流程
 * 假如在公司里，如果你的请假时间<=0.5天，那么只需要向leader打声招呼就OK了。
 * 　　如果0.5<请假天数<=3天，需要先leader打声招呼，要不然leader不知你跑哪里，然后部门经理直接签字。
 * 　　如果请假天数>3天，需要先leader打声招呼，然后到部门经理签字，最好总经经理确认签字
 * User: flashytime
 * Date: 16/11/9
 * Time: 下午5:10
 */

/**
 * Class Handler
 * 抽象处理者角色：定义一个处理请求的接口，和一个后继连接
 */
abstract class Handler
{
    protected $_handler = null;
    protected $_handlerName = null;

    abstract function handleRequest(Request $request);

    public function setSuccessor($handler)
    {
        $this->_handler = $handler;
    }

    protected function _success(Request $request)
    {
        echo $request->getName() . "'s request was passed <br />";
        return true;
    }
}

/**
 * Class ConcreteHandlerLeader
 * 具体处理者角色
 */
class ConcreteHandlerLeader extends Handler
{
    public function __construct($handlerName)
    {
        $this->_handlerName = $handlerName;
    }

    public function handleRequest(Request $request)
    {
        echo $this->_handlerName . " got it <br />";
        if ($request->getDay() <= 0.5) {
            return $this->_success($request);
        }
        if ($this->_handler instanceof Handler) {
            return $this->_handler->handleRequest($request);
        }
    }
}

/**
 * Manager
 * Class ConcreteHandlerManager
 */
class ConcreteHandlerManager extends Handler
{
    public function __construct($handlerName)
    {
        $this->_handlerName = $handlerName;
    }

    public function handleRequest(Request $request)
    {
        echo $this->_handlerName . " signed <br />";
        if ($request->getDay() > 0.5 && $request->getDay() <= 3) {
            return $this->_success($request);
        }
        if ($this->_handler instanceof Handler) {
            return $this->_handler->handleRequest($request);
        }
    }
}

/**
 * GeneralManager
 * Class ConcreteHandlerGeneralManager
 */
class ConcreteHandlerGeneralManager extends Handler
{
    public function __construct($handlerName)
    {
        $this->_handlerName = $handlerName;
    }

    public function handleRequest(Request $request)
    {
        echo $this->_handlerName . " signed <br />";
        if ($request->getDay() > 3) {
            return $this->_success($request);
        }
        if ($this->_handler instanceof Handler) {
            return $this->_handler->handleRequest($request);
        }
    }
}


/**
 * 请假申请
 * Class Request
 */
class Request
{
    private $_name;
    private $_day;
    private $_reason;

    public function __construct($name, $day, $reason)
    {
        $this->_name = $name;
        $this->_day = $day;
        $this->_reason = $reason;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setDay($day)
    {
        $this->_day = $day;
    }

    public function getDay()
    {
        return $this->_day;
    }

    public function setReason($reason)
    {
        $this->_reason = $reason;
    }

    public function getReason()
    {
        return $this->_reason;
    }
}

/**
 * Class Client
 * 客户端，发送请求
 */
class Client
{
    /**
     * 流程1：leader->manager->generalManager
     */
    public static function Send1()
    {
        $leader = new ConcreteHandlerLeader('leader');
        $manager = new ConcreteHandlerManager('manager');
        $generalManager = new ConcreteHandlerGeneralManager('generalManager');

        $request = new Request('flashytime', 4, 'rest');

        $leader->setSuccessor($manager);
        $manager->setSuccessor($generalManager);
        $leader->handleRequest($request);
    }

    /**
     * 流程2：leader->generalManager
     */
    public static function Send2()
    {
        $leader = new ConcreteHandlerLeader('leader');
        $manager = new ConcreteHandlerManager('manager');
        $generalManager = new ConcreteHandlerGeneralManager('generalManager');

        $request = new Request('flashytime', 3, 'sick');
        $leader->setSuccessor($generalManager);
        $leader->handleRequest($request);
    }

    /**
     * 流程3：manager->generalManager
     */
    public static function Send3()
    {
        $leader = new ConcreteHandlerLeader('leader');
        $manager = new ConcreteHandlerManager('manager');
        $generalManager = new ConcreteHandlerGeneralManager('generalManager');

        $request = new Request('flashytime', 0.2, 'sth');
        $manager->setSuccessor($generalManager);
        $manager->handleRequest($request);
    }
}

Client::Send1();
//Client::Send2();
//Client::Send3();