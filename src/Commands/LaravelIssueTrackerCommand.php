<?php

namespace Remeritus\LaravelIssueTracker\Commands;

use Illuminate\Console\Command;

class LaravelIssueTrackerCommand extends Command
{
    public $signature = 'laravel-issue-tracker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
