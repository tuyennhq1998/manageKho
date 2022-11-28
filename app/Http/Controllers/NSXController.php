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
    public function themsanpham(Request $request)
    {
        $isCheck = DB::table('san_pham')->where('MA_SP', $request->masanpham)->first();
        if (is_null($isCheck)) {
            DB::table('san_pham')->insert([
                'MA_SP' => $request->masanpham,
                'TEN_SP' => $request->tensanpham,
                'SL_KHO' => 0,
                'DON_GIA' => $request->dongia,
                'MA_DM' => $request->madanhmuc,
                'MA_NSX' => $request->manhasanxuat
            ]);
            return redirect('home');
        }
        return redirect('home');
    }
}
