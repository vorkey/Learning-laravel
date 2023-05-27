<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('siswa')->insert([
            'nama' => 'admin',
            'nisn' => '88912',
            'alamat' => 'secret',
            'created_at' =>date('Y-m-d H-i-s')
        ]);
        
        DB::table('siswa')->insert([
            'nama' => 'budi',
            'nisn' => '91263',
            'alamat' => 'jogja',
            'created_at' =>date('Y-m-d H-i-s')
        ]);
        
        DB::table('siswa')->insert([
            'nama' => 'wlee',
            'nisn' => '170012',
            'alamat' => './',
            'created_at' =>date('Y-m-d H-i-s')
        ]);
    }
}
