<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function insert()
    {
        $result = DB::table('mahasiswas')->insert(
            [
                'nim' => '19003036',
                'nama' => 'Sari Citra Lestari',
                'tanggal_lahir' => '2001-12-31',
                'ipk' => 3.5,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        dump($result);
    }

    public function insertBanyak()
    {
        $result = DB::table('mahasiswas')->insert(
            [
                [
                    'nim' => '19034036',
                    'nama' => 'James ',
                    'tanggal_lahir' => '2001-11-21',
                    'ipk' => 3.2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'nim' => '19033566',
                    'nama' => 'Wong ',
                    'tanggal_lahir' => '2000-11-08',
                    'ipk' => 3.1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]

        );

        dump($result);
    }

    public function update()
    {
        $result = DB::table('mahasiswas')
            ->where('nama', 'Sari Cinta Lestari')
            ->update(
                [

                    'tanggal_lahir' => '2002-12-31',
                    'ipk' => 4.5,
                    'updated_at' => now(),
                ]


            );



        dump($result);
    }

    public function delete()
    {
        $result = DB::table('mahasiswas')
            ->where('ipk','=',3.1)
            ->delete();

            dump($result);
    }

    public function get()
    {
        $result = DB::table('mahasiswas')->get();
         

            dump($result);
    }

    public function getTampil(){
        $result = DB::table('mahasiswas')->get();

        echo($result[0]->id). '<br>';
        echo($result[0]->nim). '<br>';
        echo($result[0]->nama). '<br>';
        echo($result[0]->tanggal_lahir). '<br>';
        echo($result[0]->ipk);
    }

}
