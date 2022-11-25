@extends('master')
@section('content')
                        <div class="tab-pane active" id="donvisp">
                            <div class="row g-0 rounded ">
                                <div class="col p-4">
                                    <div class="row">
                                        <div class="row">
                                            <h4 class="col-lg-5">Quản lý đơn vị sản phẩm</h4>               
                                        </div>
                                        <div class="row pt-3 col-12">
                                            <div class="data_table">
                                                <table id="table_donvisp" class="table table-striped table-bordered">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th id="series">Series</th>
                                                            <th id="malohang">Mã lô hàng</th>
                                                            <th id="ghichu">Ghi chú</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>  
                                                        @foreach($donvisp as $value)                                        
                                                        <tr>
                                                            <th>{{$value->SERIES}}</th>
                                                            <td>{{$value->MA_LO_HANG}}</td>
                                                            <td>{{$value->GHI_CHU}}</td>
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