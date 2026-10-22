<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class VelocitySensorTest extends TestCase 
{
    public function testReturnsVerySlowForSeventeen(): void
    {
        $velocitySensor = new VelocitySensor();
        $this->assertSame('Molt lent', $velocitySensor->getSpeedThreshold(17));
    }

    public function testReturnAppropriateSpeedForFiftyFour(): void
    {
        $velocitySensor = new VelocitySensor();
        $this->assertSame('Velocitat adequada', $velocitySensor->getSpeedThreshold(54));
    }
}