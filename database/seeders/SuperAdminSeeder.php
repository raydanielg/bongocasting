<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $permissions = [
            // User Management
            'view users', 'create users', 'edit users', 'delete users', 'verify users',
            
            // Role Management
            'view roles', 'create roles', 'edit roles', 'delete roles', 'assign roles',
            
            // Permission Management
            'view permissions', 'assign permissions',
            
            // Talent Management
            'view talents', 'create talents', 'edit talents', 'delete talents', 'verify talents',
            
            // Booking Management
            'view bookings', 'create bookings', 'edit bookings', 'cancel bookings', 'approve bookings',
            
            // Payment Management
            'view payments', 'process payments', 'refund payments', 'view payouts',
            
            // Contract Management
            'view contracts', 'create contracts', 'sign contracts', 'terminate contracts',
            
            // Content Management
            'view content', 'create content', 'edit content', 'delete content', 'moderate content',
            
            // Project Management (for Producers)
            'view projects', 'create projects', 'edit projects', 'delete projects', 'manage projects',
            
            // Service Management (for Service Providers)
            'view services', 'create services', 'edit services', 'delete services', 'manage services',
            
            // Company Management
            'view companies', 'create companies', 'edit companies', 'delete companies', 'verify companies',
            
            // System Settings
            'access admin', 'view analytics', 'manage settings', 'manage commission', 'backup system'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
        }

        $superAdminRole = Role::firstOrCreate(['name' => 'Super Admin', 'guard_name' => 'web']);
        $adminRole = Role::firstOrCreate(['name' => 'Admin', 'guard_name' => 'web']);
        $moderatorRole = Role::firstOrCreate(['name' => 'Moderator', 'guard_name' => 'web']);
        $artistRole = Role::firstOrCreate(['name' => 'Artist', 'guard_name' => 'web']);
        $producerRole = Role::firstOrCreate(['name' => 'Producer', 'guard_name' => 'web']);
        $talentRole = Role::firstOrCreate(['name' => 'Talent', 'guard_name' => 'web']);
        $serviceProviderRole = Role::firstOrCreate(['name' => 'Service Provider', 'guard_name' => 'web']);
        $companyRole = Role::firstOrCreate(['name' => 'Company', 'guard_name' => 'web']);
        $userRole = Role::firstOrCreate(['name' => 'User', 'guard_name' => 'web']);

        $superAdminRole->syncPermissions(Permission::all());

        $adminRole->syncPermissions([
            'view users', 'create users', 'edit users', 'verify users',
            'view roles', 'assign roles',
            'view talents', 'verify talents',
            'view bookings', 'approve bookings',
            'view payments', 'view payouts',
            'view contracts',
            'view content', 'moderate content',
            'access admin', 'view analytics',
        ]);

        // Assign permissions to Moderator
        $moderatorRole->syncPermissions([
            'view users', 'verify users',
            'view talents', 'verify talents',
            'view bookings',
            'view content', 'moderate content',
            'access admin',
        ]);

        // Assign permissions to Artist (Level 4 - Talent Scouting)
        $artistRole->syncPermissions([
            'view talents', 'create talents', 'edit talents', 'verify talents',
            'view bookings', 'create bookings',
            'view content',
        ]);

        // Assign permissions to Producer (Level 4 - Project Management)
        $producerRole->syncPermissions([
            'view projects', 'create projects', 'edit projects', 'manage projects',
            'view talents',
            'view bookings', 'create bookings', 'edit bookings',
            'view contracts', 'create contracts', 'sign contracts',
            'view payments',
        ]);

        // Assign permissions to Talent (Level 4 - Service Provider)
        $talentRole->syncPermissions([
            'view bookings',
            'view contracts', 'sign contracts',
            'view payments', 'view payouts',
            'view content', 'create content', 'edit content',
        ]);

        // Assign permissions to Service Provider (Level 4 - Accommodation & Travel)
        $serviceProviderRole->syncPermissions([
            'view services', 'create services', 'edit services', 'manage services',
            'view bookings',
            'view payments', 'view payouts',
        ]);

        // Assign permissions to Company (Level 5 - Funding & Advertising)
        $companyRole->syncPermissions([
            'view companies', 'create companies', 'edit companies',
            'view projects',
            'view bookings', 'create bookings',
            'view payments', 'process payments',
            'view analytics',
        ]);

        // Assign permissions to regular User (Level 5 - View Only)
        $userRole->syncPermissions([
            'view content',
            'view bookings',
        ]);

        $superAdmin = User::firstOrCreate(
            ['email' => 'ray@bongocasting.com'],
            [
                'name' => 'Ray Super Admin',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );

        $superAdmin->assignRole('Super Admin');

        $admin = User::firstOrCreate(
            ['email' => 'admin@bongocasting.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );

        $admin->assignRole('Admin');

        if ($this->command) {
            $this->command->info('Super Admin created successfully!');
            $this->command->info('Email: ray@bongocasting.com');
            $this->command->info('Password: password123');
        }
    }
}
