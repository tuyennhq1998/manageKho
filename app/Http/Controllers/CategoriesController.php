<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoriesController extends Controller
{
    public function themdanhmuc(Request $request)
    {
        $isCheck = DB::table('danh_muc')->where('MA_DM', $request->madanhmuc)->first();
        if (is_null($isCheck)) {
            DB::table('danh_muc')->insert([
                'MA_DM' => $request->madanhmuc,
                'TEN_DM' => $request->tendanhmuc
            ]);
            return redirect('categories');
        }
    }
}
