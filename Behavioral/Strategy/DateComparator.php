<?php
/**
 * Created by IntelliJ IDEA.
 * Author: flashytime
 * Date: 2018/9/16 15:13
 */

namespace DesignPatterns\Behavioral\Strategy;

class DateComparator implements Comparator
{
    public function compare($a, $b)
    {
        $aDate = new \DateTime($a['date']);
        $bDate = new \DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}
