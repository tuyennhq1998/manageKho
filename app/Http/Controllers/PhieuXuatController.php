<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PhieuXuatController extends Controller
{
    public function themphieuxuat(Request $request)
    {
        // dd($request->all());
        $isCheck = DB::table('phieu_xuat')->where('MA_PHIEU_XUAT', $request->maphieuxuat)->first();
        if (is_null($isCheck)) {
            DB::table('phieu_xuat')->insert([
                'MA_PHIEU_XUAT' => $request->maphieuxuat,
                'NGAY_LAP' => $request->ngaynhap,
                'TONG_TIEN' => $request->tongtien,
                'MA_NV' => $request->manhanvien,
                'MA_NCC' => $request->manhacungcap,
                'GHI_CHU' => $request->ghichu
            ]);
            $id = DB::table('phieu_xuat')->where('MA_PHIEU_XUAT', $request->maphieuxuat)->first();
            if (isset($request->maphieuxuat))
            {
                DB::table('chi_tiet_px')->insert([
                    'MA_PHIEU_XUAT' => $id->MA_PHIEU_XUAT,
                    'MA_SP' => $request->masanpham,
                    'SO_LUONG' => $request->soluong,
                    'DON_GIA' => $request->dongia
                ]);
                $sp = DB::table('san_pham')->where('MA_SP', $request->masanpham)->first();
                DB::table('san_pham')->where('MA_SP', $request->masanpham)->update([
                    'SL_KHO' => $sp->SL_KHO - $request->soluong
                ]);
                $i = 1;
                for($i ; $i <100; $i++) {
                    $s = 'masanpham'.$i;
                    if (isset($request->$s))
                    {
                        $soluong = 'soluong'.$i;
                        $soluong = $request->$soluong;
                        $dongia = 'dongia'.$i;
                        $dongia = $request->$dongia;

                        DB::table('chi_tiet_px')->insert([
                            'MA_PHIEU_XUAT' => $id->MA_PHIEU_XUAT,
                            'MA_SP' => $request->$s,
                            'SO_LUONG' => $soluong,
                            'DON_GIA' => $dongia
                        ]);
                        $k = DB::table('san_pham')->where('MA_SP', $request->$s)->first();
                        DB::table('san_pham')->where('MA_SP', $request->$s)->update([
                            'SL_KHO' => $k->SL_KHO - $soluong
                        ]);
                    }
                    else {
                        break;
                    }
                }
            }
            return redirect('xuatkho');
        }
    }
}
