<?php

namespace IAmKevinMcKee\SingleDatabaseTenancy\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class PublishStubs extends Command
{
    protected $signature = 'single-db-tenancy:stubs';

    protected $description = 'Publish Single Database Multi-Tenant stubs';

    public function handle()
    {
        if (! is_dir($stubsPath = base_path('stubs'))) {
            (new Filesystem)->makeDirectory($stubsPath);
        }

        file_put_contents(
            $stubsPath . '/migration.create.stub',
            file_get_contents(__DIR__.'/migration.create.stub')
        );

        file_put_contents(
            $stubsPath . '/model.stub',
            file_get_contents(__DIR__.'/model.stub')
        );
    }
}
