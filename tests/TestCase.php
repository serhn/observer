<?php

declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Serh\Observer\Test;

use Serh\Observer\WheatherGenerator;
use Serh\Observer\WheatherLondon;
use Serh\Observer\WheatherKiev;

/**
 * Lets you easily generate log records and a dummy formatter for testing purposes
 * *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class ArrayDiffTest extends \PHPUnit\Framework\TestCase
{
    //public function wheather
    public function testLondon(){
        $weatherLondon = new WheatherLondon();
        //$this->assertInstanceOf($weatherLondon, \Serh\Observer\ObserverInterface);
    }
    public function testObserver()
    {
        $weatherLondon = new WheatherLondon();
        $weatherKiev = new WheatherKiev();

        $weatherGenerator = new WheatherGenerator();
        $weatherGenerator->atach($weatherLondon);
        $weatherGenerator->atach($weatherKiev);
    }
}
