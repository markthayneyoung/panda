<?php

use PHPUnit\Framework\TestCase;

class PandaTest extends TestCase
{
    public function testRandomAdvice_WithDefaultAdviceEntries_ReturnsNotNull()
    {
        $panda = new DissapointmentPanda();
        $this->assertNotNull($panda->getAdvice());

    }

    public function testAdviceArray_WithDefaultEntries_ReturnsCountOf5()
    {
        $panda = new DissapointmentPanda();
        $this->assertCount(5, $panda->advice);
    }

    public function testAddAdvice_WithNewAdvice_ReturnsCountOf6()
    {
        $panda = new DissapointmentPanda();
        $panda->addAdvice('Be excellent to eachother');
        $this->assertCount(6, $panda->advice);
    }


}







?>