<?php

namespace App\Console\Commands;

use App\Imports\CarImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:excel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'import excel file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Excel::import(new CarImport(), public_path('excel/cars.xlsx'));
    }
}
