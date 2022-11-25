@extends('master')
@section('content')
                        <div class="tab-pane active" id="lohang">
                            <div class="row g-0 rounded ">
                                <div class="col p-4">
                                    <div class="row">
                                        <div class="row">
                                            <h4 class="col-lg-5">Quản lý lô hàng</h4>               
                                        </div>
                                        <div class="row pt-3 col-12">
                                            <div class="data_table">
                                                <table id="table_lohang" class="table table-striped table-bordered">
                                                    <thead class="table-dark">
                                                        <tr>
                                                        
                                                            <th id="malohang">Mã lô hàng</th>
                                                            <th id="soluong">Số lượng</th>
                                                            <th id="manhacungcap">Mã/Tên nhà cung cấp</th>
                                                            <th id="make">Mã kệ</th>
                                                            <th id="masanpham">Mã/Tên sản phẩm</th>
                                                            <th id="maphieunhap">Mã phiếu nhập</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>    
                                                        @foreach ($lohang as $value)                                      
                                                        <tr>
                                                            <th>{{$value->MA_LO_HANG}}</th>
                                                            <td>{{$value->SO_LUONG}}</td>
                                                            <td>{{$value->TEN_NCC}}</td>
                                                            <td>{{$value->MA_KE}}</td>
                                                            <td>{{$value->TEN_SP}}</td>
                                                            <td>{{$value->MA_PHIEU_NHAP}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>                       
                                    </div>    
                                 </div>                              
                            </div>
                        </div>
                   @stop