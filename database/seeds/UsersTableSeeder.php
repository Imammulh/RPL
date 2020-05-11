<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'dramagabogor',
            'password' => Hash::make('dramagabogor'),
            'email' => 'dramagaofficial@gmail.com',
            'nama_kecamatan' => 'Kecamatan Dramaga',
            'Alamat_kecamatan' => 'Jl. Ps. Dramaga No.74, RT.6/RW.2, Dramaga, Bogor, Jawa Barat 16680, Indonesia',
            'camat' => 'Ivan Pamudia',
            'remember_token' => str::random(10),
        ]);
    }
}
