<?php

namespace Trogers1884\LaravelTimer\Tests;

use Trogers1884\LaravelTimer\Timer;

class TimerTest extends TestCase
{
    /** @test */
    public function it_starts_timer_on_creation()
    {
        $timer = new Timer();
        $this->assertNotNull($timer->getStartTime());
    }

    /** @test */
    public function it_can_measure_elapsed_time()
    {
        $timer = new Timer();
        sleep(1); // Wait for 1 second
        $elapsed = $timer->getElapsedTime();
        $this->assertGreaterThan(0, $elapsed);
    }

    /** @test */
    public function it_can_restart_timer()
    {
        $timer = new Timer();
        $firstStart = $timer->getStartTime();
        sleep(1);
        $timer->startTimer();
        $secondStart = $timer->getStartTime();

        $this->assertNotEquals($firstStart, $secondStart);
    }
}