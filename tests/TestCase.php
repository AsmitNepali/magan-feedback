<?php

namespace Magan\Feedback\Tests;

use Magan\Feedback\FeedbackServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            FeedbackServiceProvider::class,
        ];
    }
}
