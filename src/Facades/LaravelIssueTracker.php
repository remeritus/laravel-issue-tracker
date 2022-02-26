<?php

namespace Remeritus\LaravelIssueTracker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Remeritus\LaravelIssueTracker\LaravelIssueTracker
 */
class LaravelIssueTracker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-issue-tracker';
    }
}
