<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class SantriController extends Controller
{
    public function index()
    {
        // mengambil data dari table tbl_siswa
        $siswa = DB::table('santri')->get();

        // mengirim data siswa ke view index
        return view('data',['santri' => $siswa]);
    }

}
