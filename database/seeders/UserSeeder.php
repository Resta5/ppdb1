<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat sample role
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Administrator";
        $adminRole->save();

        $pesertaRole = new Role();
        $pesertaRole->name = "peserta";
        $pesertaRole->display_name = "peserta";
        $pesertaRole->save();

        // membuat sample admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('12345678');
        $admin->save();
        $admin->attachRole($adminRole);

        // membuat sample peserta
        $peserta = new User();
        $peserta->name = 'Peserta Ppdb';
        $peserta->email = 'peserta@gmail.com';
        $peserta->password = bcrypt('123456789');
        $peserta->save();
        $peserta->attachRole($pesertaRole);
    }
}
