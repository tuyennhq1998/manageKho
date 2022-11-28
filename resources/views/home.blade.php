@extends('master')
@section('content')
                        <div class="tab-pane active" id="sanpham">
                            <div class="row g-0 rounded ">
                                <div class="col p-4">
                                    <div class="row">
                                        <div class="row">
                                            <h4 class="col-lg-5">Quản lý sản phẩm</h4>               
                                        </div>
                                        <div class="row pt-3 col-12">
                                            <div class="data_table">
                                                <table id="table_sanpham" class="table table-striped table-bordered" style="width: 100%">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th id="masanpham">Mã sản phẩm</th>
                                                            <th id="tensanpham">Tên sản phẩm</th>
                                                            <th id="soluong">Số lượng kho</th>
                                                            <th id="dongia">Đơn giá</th>
                                                            <th id="madanhmuc">Tên danh mục</th>
                                                            <th id="mansx">Tên nhà sản xuất</th>
                                                            <th id="hanhdong">Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>  
                                                        @foreach($sanpham as $value)                                        
                                                        <tr>
                                                            <th>{{$value->MA_SP}}</th>
                                                            <td>{{$value->TEN_SP}}</td>
                                                            <td>{{$value->SL_KHO}}</td>
                                                            <td>{{$value->DON_GIA}}</td>
                                                            <td>{{$value->TEN_DM}}</td>
                                                            <td>{{$value->TEN_NSX}}</td>
                                                            <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a>  </td>
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