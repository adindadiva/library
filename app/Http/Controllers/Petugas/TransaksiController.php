<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * 
     */
    public function __invoke(Request $request)
    {
        return view('petugas.transaksi.index');
    }
}
