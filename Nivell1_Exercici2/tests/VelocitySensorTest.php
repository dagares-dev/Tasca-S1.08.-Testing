<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class VelocitySensorTest extends TestCase 
{
    public function testReturnsVerySlowForTwenty(): void
    {
        $velocitySensor = new VelocitySensor();
        $this->assertSame('Molt lent', $velocitySensor->getSpeedThreshold(17));
    }
}