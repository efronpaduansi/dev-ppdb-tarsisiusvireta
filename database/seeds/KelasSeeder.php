<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert(
            [
                'nama_kelas' => 'X MIPA 1',
                'id_jurusan' => 1,
            ],
            [
                'nama_kelas' => 'X MIPA 2',
                'id_jurusan' => 1,
            ],
            [
                'nama_kelas' => 'X MIPA 3',
                'id_jurusan' => 1,
            ],
            [
                'nama_kelas' => 'XI MIPA 1',
                'id_jurusan' => 1,
            ],
            [
                'nama_kelas' => 'XI MIPA 2',
                'id_jurusan' => 1,
            ],
            [
                'nama_kelas' => 'XI MIPA 3',
                'id_jurusan' => 1,
            ],
            [
                'nama_kelas' => 'XII MIPA 1',
                'id_jurusan' => 1,
            ],
            [
                'nama_kelas' => 'XII MIPA 2',
                'id_jurusan' => 1,
            ],
            [
                'nama_kelas' => 'XII MIPA 3',
                'id_jurusan' => 1,
            ],
        );
    }
}
