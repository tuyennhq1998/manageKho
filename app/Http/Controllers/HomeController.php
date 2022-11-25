<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function home() {
        $products = DB::select('select san_pham.MA_SP,san_pham.TEN_SP,san_pham.SL_KHO,san_pham.DON_VI_TINH,san_pham.DON_GIA, danh_muc.TEN_DM,nha_san_xuat.TEN_NSX from san_pham join danh_muc on san_pham.MA_DM=danh_muc.MA_DM join nha_san_xuat on san_pham.MA_NSX = nha_san_xuat.MA_NSX');
        return view('home', ['sanpham' => $products]);
    }

    public function categories() {
        $categories = DB::select('select * from danh_muc');
        return view('categories', ['categories' => $categories]);
    }

    public function lohang() {
        $lohang = DB::select('SELECT lo_hang.MA_LO_HANG, lo_hang.SO_LUONG, n_cung_cap.TEN_NCC, ke_hang.MA_KE, san_pham.TEN_SP, phieu_nhap.MA_PHIEU_NHAP from lo_hang join n_cung_cap on lo_hang.MA_NCC = n_cung_cap.MA_NCC join ke_hang on lo_hang.MA_KE = ke_hang.MA_KE join phieu_nhap on lo_hang.MA_PHIEU_NHAP = phieu_nhap.MA_PHIEU_NHAP join san_pham on lo_hang.MA_SP = san_pham.MA_SP');
        return view('lohang', ['lohang' => $lohang]);
    }

    public function donvisanpham() {
        $donvisanpham = DB::select('SELECT don_vi_sp.SERIES, don_vi_sp.GHI_CHU, don_vi_sp.MA_LO_HANG from don_vi_sp');
        return view('donvisanpham', ['donvisp' => $donvisanpham]);
    }

    public function kehang() {
        $kehang = DB::select('SELECT * FROM ke_hang');
        return view('kehang', ['kehang' => $kehang]);
    }
    public function nhapkho() {
        $nhapkho = DB::select('SELECT phieu_nhap.MA_PHIEU_NHAP, phieu_nhap.TONG_TIEN, phieu_nhap.GHI_CHU, phieu_nhap.NGAY_LAP, nhan_vien.TEN_NV, n_cung_cap.TEN_NCC from phieu_nhap join nhan_vien on phieu_nhap.MA_NV = nhan_vien.MA_NV join n_cung_cap on phieu_nhap.MA_NCC = n_cung_cap.MA_NCC');
        return view('nhapkho', ['nhapkho' => $nhapkho]);
    }
    public function xuatkho() {
        $xuatkho = DB::select('SELECT phieu_xuat.MA_PHIEU_XUAT, phieu_xuat.TONG_TIEN, phieu_xuat.GHI_CHU, phieu_xuat.NGAY_LAP, nhan_vien.TEN_NV, n_cung_cap.TEN_NCC from phieu_xuat join nhan_vien on phieu_xuat.MA_NV = nhan_vien.MA_NV join n_cung_cap on phieu_xuat.MA_NCC = n_cung_cap.MA_NCC');
        return view('xuatkho', ['xuatkho' => $xuatkho]);
    }
    public function nhasanxuat() {
        $nhasanxuat = DB::select('select * from nha_san_xuat');
        return view('nhasanxuat', ['nhasanxuat' => $nhasanxuat]);
    }
    public function nhacungcap() {
        $nhacungcap = DB::select('select * from n_cung_cap');
        return view('nhacungcap', ['nhacungcap' => $nhacungcap]);
    }
    public function nhanvien() {
        $nhanvien = DB::select('SELECT nhan_vien.MA_NV, nhan_vien.TEN_NV, nhan_vien.SDT, nhan_vien.EMAIL, nhan_vien.USERNAME, loai_nv.TEN_LOAI_NV from nhan_vien join loai_nv on nhan_vien.MA_LOAI_NV = loai_nv.MA_LOAI_NV');
        return view('nhanvien', ['nhanvien' => $nhanvien]);
    }
}
