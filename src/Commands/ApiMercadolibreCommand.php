<?php

namespace JaimeNorato\ApiMercadolibre\Commands;

use Illuminate\Console\Command;

class ApiMercadolibreCommand extends Command
{
    public $signature = 'api-mercadolibre';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
