<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\User;//model table users
// use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'moch rizal';
        $inputan['email'] = 'rizalhermawan24@gmail.com'; //ganti pake emailmu
        $inputan['password'] = Hash::make('123258'); //passwordnya 123258
        $inputan['phone'] = '085895875364';
        $inputan['alamat'] = 'Bulung Kulon Rt 03 Rw 05';
        $inputan['role'] = 'admin'; //kita akan membuat akun atau users in dengan role admin
        User::create($inputan);
    }
}
