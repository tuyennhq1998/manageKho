@extends('master')
@section('content')
                        <div class="tab-pane active" id="danhmuc">
                            <div class="row  g-0 rounded ">
                                <div class="col p-4">
                                    <div class="row">
                                        <div class="row justify-content-between">
                                            <h4 class="col-lg-5">Quản lý danh mục</h4>
                                            <button type="button" class="btn btn-primary btnDanhmuc" data-bs-toggle="modal" data-bs-target="#themdanhmuc">
                                                Thêm danh mục
                                            </button>
                                            <div class="modal fade" id="themdanhmuc" tabindex="-1" aria-labelledby="themdanhmucLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="themdanhmucLabel">Thêm danh mục</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="madanhmuc" class="form-label">Mã danh mục</label>
                                                                <input type="text" class="form-control" id="madanhmuc" value="">
                                                              </div>
                                                            <div class="mb-3">
                                                              <label for="tendanhmuc" class="form-label">Tên danh mục</label>
                                                              <input type="text" class="form-control" id="tendanhmuc" value="">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <button type="button" class="btn btn-primary btnThemdanhmuc">Thêm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pt-3 col-12">
                                            <div class="data_table">
                                                <table id="table_danhmuc" class="table table-striped table-bordered">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th id="madanhmuc">Mã danh mục</th>
                                                            <th id="tendanhmuc">Tên danh mục</th>
                                                            <th id="hanhdong">Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>  
                                                        @foreach($categories as $value)                                        
                                                        <tr>
                                                            <th>{{$value->MA_DM}}</th>
                                                            <td>{{$value->TEN_DM}}</td>
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