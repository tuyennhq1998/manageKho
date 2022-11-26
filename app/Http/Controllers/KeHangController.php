<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KeHangController extends Controller
{
    public function themkehang(Request $request)
    {
        $isCheck = DB::table('ke_hang')->where('MA_KE', $request->madanhmuc)->first();
        if (is_null($isCheck)) {
            DB::table('ke_hang')->insert([
                'MA_KE' => $request->make,
                'SL_CHUA_CON_LAI' => $request->soluongchuaconlai
            ]);
            return redirect('kehang');
        }
    }
}
