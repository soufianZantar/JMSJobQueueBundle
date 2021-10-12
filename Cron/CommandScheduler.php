<?php

namespace Atexo\JobQueueBundle\Cron;

use Atexo\JobQueueBundle\Console\CronCommand;
use Atexo\JobQueueBundle\Entity\Job;

class CommandScheduler implements JobScheduler
{
    private $name;
    private $command;

    public function __construct(string $name, CronCommand $command)
    {
        $this->name = $name;
        $this->command = $command;
    }

    public function getCommands(): array
    {
        return [$this->name];
    }

    public function shouldSchedule(string $_, \DateTime $lastRunAt): bool
    {
        return $this->command->shouldBeScheduled($lastRunAt);
    }

    public function createJob(string $_, \DateTime $lastRunAt): Job
    {
        return $this->command->createCronJob($lastRunAt);
    }
}