<?php

namespace Konectdigital\GlovoApi\Tests;

use Orchestra\Testbench\TestCase;
use Konectdigital\GlovoApi\GlovoApiServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [GlovoApiServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
