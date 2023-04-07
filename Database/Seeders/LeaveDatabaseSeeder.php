<?php

namespace Lumis\LeaveManagement\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Lumis\LeaveApplication\Database\Seeders\LeaveStageSeeder;
use Lumis\LeaveApplication\Database\Seeders\LeaveTypeSeeder;

class LeaveDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call();
    }
}
