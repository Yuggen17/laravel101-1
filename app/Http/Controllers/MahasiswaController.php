<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class MahasiswaController extends Controller
{
    public function insert()
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = '19003036';
        $mahasiswa->nama = 'Sari Citra Lestari';
        $mahasiswa->tanggal_lahir = '2001-12-31';
        $mahasiswa->ipk = 3.5;
        $mahasiswa->save();

        dump($mahasiswa);
    }

    public function massAssignment()
    {
        Mahasiswa::create(
            [
                'nim' => '19021044',
                'nama' => 'Rudi Permana',
                'tanggal_lahir' => '2000-08-22',
                'ipk' => 2.5,
            ]
        );

        return "Berhasil di proses";
    }

    public function massAssignment2()
    {
        $mahasiswa1 = Mahasiswa::create(
            [
                'nim' => '19002032',
                'nama' => 'Rina Kumala Sari',
                'tanggal_lahir' => '2000-06-28',
                'ipk' => 3.4,
            ]
        );
        dump($mahasiswa1);

        $mahasiswa2 = Mahasiswa::create(
            [
                'nim' => '18012012',
                'nama' => 'James Situmorang',
                'tanggal_lahir' => '1999-04-02',
                'ipk' => 2.7,
            ]
        );
        dump($mahasiswa2);

        $mahasiswa3 = Mahasiswa::create(
            [
                'nim' => '19005011',
                'nama' => 'Riana Putria',
                'tanggal_lahir' => '2000-11-23',
                'ipk' => 2.9,
            ]
        );
        dump($mahasiswa3);
    }

    public function all(){
        $result = Mahasiswa::all();
        dump($result);
    }

     public function allView(){
        $mahasiswas = Mahasiswa::all();
        return view('tampil-mahasiswa',['mahasiswas' => $mahasiswas]);
    }

}
