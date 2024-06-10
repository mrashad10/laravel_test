<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class GenerateModelsAndFactories extends Command
{
    protected $signature = 'generate:models-factories';
    protected $description = 'Generate models and factories for all tables';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();

        foreach ($tables as $table) {
            $modelName = ucfirst(Str::singular($table)); // Assumes table names are plural
            $this->info("Generating model for table: $table");

            // Generate Model
            Artisan::call('krlove:generate:model', [
                'class-name' => $modelName,
                '--table-name' => $table,
            ]);

            // Generate Factory
            Artisan::call('make:factory', [
                'name' => $modelName . 'Factory',
                '--model' => 'App\\Models\\' . $modelName,
            ]);

            $this->info("Generated model and factory for table: $table");
        }

        return 0;
    }
}
