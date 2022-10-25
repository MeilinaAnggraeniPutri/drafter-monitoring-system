<?php

namespace Modules\Report\database\seeders\Report;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Report\app\Models\Report;

class ReportSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        Report::factory(5)->create();
    }
}
