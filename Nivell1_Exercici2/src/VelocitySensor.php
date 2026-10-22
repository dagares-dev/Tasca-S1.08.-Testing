<?php
declare(strict_types=1);

class VelocitySensor
{
    public function getSpeedThreshold(int $speed): string
    {
        if ($speed < 30) {
            return 'Molt lent';
        } elseif ($speed >= 30 && $speed <= 60) {
            return 'Velocitat adequada';
        }
    }
}