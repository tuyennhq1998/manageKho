@extends('master')
@section('content')

                        <div class="tab-pane active" id="nhanvien">
                            <div class="row  g-0 rounded ">
                                <div class="col p-4">
                                    <div class="row">
                                        <div class="row justify-content-between">
                                            <h4 class="col-lg-5">Danh sách nhân viên</h4>
                                            <button type="button" class="btn btn-primary btnNhanvien" data-bs-toggle="modal" data-bs-target="#themNhanvien">
                                                Thêm nhân viên
                                            </button>
                                            <div class="modal fade" id="themNhanvien" tabindex="-1" aria-labelledby="themNhanvienLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="themNhanvienLabel">Thêm nhân viên</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form id="form-add-nv" action="{{url('themnhanvien')}}" method="POST">
                                                        @csrf
                                                    <div class="modal-body">
                                                            <div class="mb-3">
                                                              <label for="tennhanvien" class="form-label">Tên nhân viên</label>
                                                              <input type="text" class="form-control" name="tennhanvien" value="">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="sdt" class="form-label">Số điện thoại</label>
                                                                <input type="text" class="form-control" name="sdt" value="">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="email" class="form-control" name="email" value="">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="username" class="form-label">Username</label>
                                                                <input type="text" class="form-control" name="username" value="">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="matkhau" class="form-label">Mật khẩu</label>
                                                                <input type="password" class="form-control" name="matkhau" value="">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="maloainhanvien" class="form-label">Mã loại nhan viên</label>
                                                                <select class="form-select form-select-sm form-control" aria-label=".form-select-sm example" name="maloainhanvien">
                                                                    <option selected value="LN001">LN001</option>
                                                                    <option value="LN002">LN002</option>
                                                                    
                                                                  </select>
                                                            </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <button type="submit" class="btn btn-primary btnThemnhanvien">Thêm</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pt-3 col-12">
                                            <div class="data_table">
                                                <table id="table_nhanvien" class="table table-striped table-bordered">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th id="manhanvien">Mã nhân viên</th>
                                                            <th id="tennhanvien">Tên nhân viên</th>
                                                            <th id="sdt">Số điện thoại</th>
                                                            <th id="email">Email</th>
                                                            <th id="username">Username</th>
                                                            <th id="maloainhanvien">Mã loại nhân viên</th>
                                                            <th id="">Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody> 
                                                        @foreach($nhanvien as $value)                                         
                                                        <tr>
                                                            <th>{{$value->MA_NV}}</th>
                                                            <td>{{$value->TEN_NV}}</td>
                                                            <td>{{$value->SDT}}</td>
                                                            <td>{{$value->EMAIL}}</td>
                                                            <td>{{$value->USERNAME}}</td>
                                                            <td>{{$value->TEN_LOAI_NV}}</td>
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

                                <hr style="width: 1110px">
                                <div class="row p-3"></div>
                                <div class="row">
                                    <div class="row justify-content-between">
                                        <h4 class="col-lg-5">Loại nhân viên</h4>
                                    </div>
                                    <div class="row pt-3 col-12">
                                        <div class="data_table">
                                            <table id="table_loainhanvien" class="table table-striped table-bordered">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th id="maloainhanvien">Mã loại nhân viên</th>
                                                        <th id="loainhanvien">Loại nhân viên</th>
                                                    </tr>
                                                </thead>
                                                <tbody>                                          
                                                    <tr>
                                                        <th>LN001</th>
                                                        <td>Quản lý kho</td>
                                                    </tr>
                                                    <tr>
                                                        <th>LN002</th>
                                                        <td>Nhân viên kho</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
<!-- <script type="text/javascript">
    $('#form-add-nv').submit(function(e){
        $.ajax({
            type: "POST",
            cache: false,
            url : "{{url('themnhanvien')}}",
            data : {
                // "_token" : $.("#token").val(),
                "tennhanvien" : jQuery("#tennhanvien").val(),
                "sdt" : jQuery("#sdt").val(),
                "email" : jQuery("#email").val(),
                "username" :jQuery("#username").val(),
                "password" : jQuery("#matkhau").val(),
                "maloainhanvien": jQuery("#maloainhanvien").val()
            },
            success: function(data) {
                console.log(data)
            },
            error: function(data) {
                console.log(data)
            }

        });
    });
</script> -->
@stop
