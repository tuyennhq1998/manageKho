@extends('master')
@section('content')
                        <div class="tab-pane active" id="kehang">
                            <div class="row  g-0 rounded ">
                                <div class="col p-4">
                                    <div class="row">
                                        <div class="row justify-content-between">
                                            <h4 class="col-lg-5">Quản lý kệ hàng</h4>
                                            <button type="button" class="btn btn-primary btnKe" data-bs-toggle="modal" data-bs-target="#themke">
                                                Thêm kệ
                                            </button>
                                            <div class="modal fade" id="themke" tabindex="-1" aria-labelledby="themkeLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="themkeLabel">Thêm kệ</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="make" class="form-label">Mã kệ</label>
                                                                <input type="text" class="form-control" id="make" value="">
                                                              </div>
                                                            <div class="mb-3">
                                                              <label for="soluongchuaconlai" class="form-label">Số lượng chứa còn lại</label>
                                                              <input type="text" class="form-control" id="soluongchuaconlai" value="">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <button type="button" class="btn btn-primary btnThemke">Thêm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pt-3 col-12">
                                            <div class="data_table">
                                                <table id="table_kehang" class="table table-striped table-bordered">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th class="make">Mã kệ</th>
                                                            <th class="soluongchuaconlai">Số lượng chứa còn lại</th>
                                                            <th class="danhmuc">Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody> 
                                                        @foreach($kehang as $value)                                         
                                                        <tr>
                                                            <th>{{$value->MA_KE}}</th>
                                                            <td>{{$value->SL_CHUA_CON_LAI}}</td>
                                                            <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a>      
                                                                <a href=""><i class="fa-solid fa-trash"></i></a>
                                                            </td>
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
                        </div>
@stop