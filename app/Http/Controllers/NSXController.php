<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NSXController extends Controller
{
    public function themnhasanxuat(Request $request)
    {
        $isCheck = DB::table('nha_san_xuat')->where('MA_NSX', $request->manhasanxuat)->first();
        if (is_null($isCheck)) {
            DB::table('nha_san_xuat')->insert([
                'MA_NSX' => $request->manhasanxuat,
                'TEN_NSX' => $request->tennhasanxuat,
            ]);
            return redirect('nhasanxuat');
        }
    }
}
