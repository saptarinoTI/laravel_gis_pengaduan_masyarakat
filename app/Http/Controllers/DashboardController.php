<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $datas = ['pengaduan', 'tanggapan', 'akun'];
        return view('dashboard.index', compact('datas'));
    }
}
