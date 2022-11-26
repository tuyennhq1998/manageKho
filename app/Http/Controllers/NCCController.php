<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NCCController extends Controller
{
    public function themnhacungcap(Request $request)
    {
        $isCheck = DB::table('n_cung_cap')->where('MA_NCC', $request->manhacungcap)->first();
        if (is_null($isCheck)) {
            DB::table('n_cung_cap')->insert([
                'MA_NCC' => $request->manhacungcap,
                'TEN_NCC' => $request->tennhacungcap,
                'DIA_CHI_NCC' => $request->diachi,
                'SDT' => $request->sdt,
                'email' => $request->email
            ]);
            return redirect('nhacungcap');
        }
    }
}
