<?php

class LeakTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @expectedException \RuntimeException
     */
    public function testLeak()
    {
        throw new \RuntimeException();
    }
}
