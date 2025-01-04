<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Staff;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class StaffSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Staff::truncate();
        Staff::create([
            'account' => 'admin',
            'name' => 'admin',
            'password' => Hash::make('1111'),
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
