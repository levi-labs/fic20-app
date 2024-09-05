<?php

namespace Database\Seeders;

use App\Models\BasicSalary;
use App\Models\PermissionRole;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        $this->call(CompanySeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(PermissionRoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(DesignationSeeder::class);
        $this->call(ShiftSeeder::class);
        $this->call(BasicSalarySeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(HolidaySeeder::class);
        $this->call(LeaveTypeSeeder::class);
        $this->call(LeaveSeeder::class);
    }
}
