<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            ['id'=>1,'name'=>'active','label'=>'active'],
            ['id'=>2,'name'=>'inactive','label'=>'inactive'],
            ['id'=>3,'name'=>'pending','label'=>'pending'],
            ['id'=>4,'name'=>'suspended','label'=>'suspended'],
            ['id'=>5,'name'=>'banned','label'=>'banned'],
        ]);
    }
}
