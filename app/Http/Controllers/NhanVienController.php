<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NhanVienController extends Controller
{
    public function themnhanvien(Request $request)
    {
        // dd($this->guid());
        $maNhanVien = 'NV_'.$this->guid();
        $isCheckExisted = DB::table('nhan_vien')->where('MA_NV', $maNhanVien)->first();
        if (is_null($isCheckExisted)) {
            DB::table('nhan_vien')->insert([
                'MA_NV' => $maNhanVien,
                'TEN_NV' => $request->tennhanvien,
                'SDT' => $request->sdt,
                'EMAIL' => $request->email,
                'USERNAME' => $request->username,
                'PASSWORD' => $request->matkhau,
                'MA_LOAI_NV' => $request->maloainhanvien
            ]);
            return redirect('nhanvien');
        }
        return redirect('nhanvien');
    }

    function guid()
    {
        $randomString = openssl_random_pseudo_bytes(16);
        $time_low = bin2hex(substr($randomString, 0, 1));
        $time_mid = bin2hex(substr($randomString, 4, 2));

        return strtoupper(sprintf('%03s%02s', $time_low, $time_mid));
    }
}
