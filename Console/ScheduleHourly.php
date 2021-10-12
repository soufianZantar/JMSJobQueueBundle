<?php

declare(strict_types = 1);

namespace Atexo\JobQueueBundle\Console;

use Atexo\JobQueueBundle\Entity\Job;
use Symfony\Component\Console\Command\Command;

trait ScheduleHourly
{
    use ScheduleInSecondInterval;

    protected function getScheduleInterval(): int
    {
        return 3600;
    }
}