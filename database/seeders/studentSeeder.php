<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users_2")->insert([
            "Name" => "Jhon Doe",
            "Email" => "jhon@gmail.com",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
