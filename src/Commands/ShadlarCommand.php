<?php

namespace Rmirandasv\Shadlar\Commands;

use Illuminate\Console\Command;

class ShadlarCommand extends Command
{
    public $signature = 'shadlar';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
