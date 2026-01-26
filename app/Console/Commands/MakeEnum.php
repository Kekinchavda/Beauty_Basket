<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeEnum extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:enum {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a PHP Enum class';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $path = app_path("Enums/{$name}.php");

        if (file_exists($path)) {
            $this->error('Enum already exists!');
            return;
        }

        if (!is_dir(app_path('Enums'))) {
            mkdir(app_path('Enums'));
        }

        file_put_contents($path, <<<PHP
        <?php

        namespace App\Enums;

        enum {$name}: string
        {
            //
        }
        PHP);

        $this->info("Enum {$name} created successfully.");
    }
}
