<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('appointments')->insert([
            'comments' => Str::random(10),
            'employee_id' => Str::random(10).'@gmail.com',
            'client_id' => Str::random(10),
        ]);

        //commit para naay ma dugang green sa github
    }
}