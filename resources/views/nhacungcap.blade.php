@extends('master')
@section('content')
                        <div class="tab-pane active" id="nhacungcap">
                            <div class="row g-0 rounded ">
                                <div class="col p-4">
                                    <div class="row">
                                        <div class="row">
                                            <h4 class="col-lg-5">Quản lý nhà cung cấp</h4>               
                                        </div>
                                        <div class="row pt-3 col-12">
                                            <div class="data_table">
                                                <table id="table_nhacungcap" class="table table-striped table-bordered">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th scope="col" class="manhacungcap">Mã nhà cung cấp</th>
                                                            <th scope="col" class="tennhacungcap">Tên nhà cung cấp</th>
                                                            <th scope="col" class="diachi">Địa chỉ</th>
                                                            <th scope="col" class="sdt">Số điện thoại</th>
                                                            <th scope="col" class="email">Email</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>       
                                                        @foreach($nhacungcap as $value)                                   
                                                        <tr>
                                                            <th>{{$value->MA_NCC}}</th>
                                                            <td>{{$value->TEN_NCC}}</td>
                                                            <td>{{$value->DIA_CHI_NCC}}</td>
                                                            <td>{{$value->SDT}}</td>
                                                            <td>{{$value->EMAIL}}</td>
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