<?php

namespace IAmKevinMcKee\SingleDatabaseTenancy\Tests;

use Orchestra\Testbench\TestCase;
use IAmKevinMcKee\SingleDatabaseTenancy\SingleDatabaseTenancyServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [SingleDatabaseTenancyServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
