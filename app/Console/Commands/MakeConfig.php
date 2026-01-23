<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeConfig extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:config {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new config file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = strtolower($this->argument('name'));
        $path = config_path($name . '.php');

        if (file_exists($path)) {
            $this->error("Config file '{$name}.php' already exists!");
            return;
        }

        $stub = <<<PHP
            <?php

            return [
                //
            ];
            PHP;

        file_put_contents($path, $stub);

        $this->info("Config file '{$name}.php' created successfully!");
    }

}
