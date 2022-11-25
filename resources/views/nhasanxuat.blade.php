@extends('master')
@section('content')
                        <div class="tab-pane active" id="nhasx">
                            <div class="row g-0 rounded ">
                                <div class="col p-4">
                                    <div class="row">
                                        <div class="row">
                                            <h4 class="col-lg-5">Quản lý nhà sản xuất</h4>               
                                        </div>
                                        <div class="row pt-3 col-12">
                                            <div class="data_table">
                                                <table id="table_nhasx" class="table table-striped table-bordered">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th id="mansx">Mã nhà sản xuất</th>
                                                            <th id="tennsx">Tên nhà sản xuất</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>      
                                                        @foreach($nhasanxuat as $value)                                    
                                                        <tr>
                                                            <th>{{$value->MA_NSX}}</th>
                                                            <td>{{$value->TEN_NSX}}</td>
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