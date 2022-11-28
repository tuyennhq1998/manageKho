@extends('master')
@section('content')
                        <div class="tab-pane active" id="xuatkho">
                            <div class="row  g-0 rounded ">
                                <div class="col p-4">
                                    <div class="row">
                                        <div class="row justify-content-between">
                                            <h4 class="col-lg-5">Danh sách phiếu xuất</h4>
                                            <button type="button" class="btn btn-primary btnPhieuxuat" data-bs-toggle="modal" data-bs-target="#lapphieuxuat">
                                                Lập phiếu xuất
                                            </button>
                                            <div class="modal fade" id="lapphieuxuat" tabindex="-1" aria-labelledby="lapphieuxuatLabel" aria-hidden="true">
                                                <div class="modal-dialog lapphieuxuat">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="lapphieuxuatLabel">Lập phiếu xuất</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{url('themphieuxuat')}}" method="post"> @csrf
                                                    <div class="modal-body">
                                                        <div class="row clearfix">
                                                            <div class="col-md-12 table-responsive">
                                                                    <div class="mb-3">
                                                                        <label for="maphieunhap" class="form-label">Mã phiếu xuất</label>
                                                                        <input type="text" class="form-control" name="maphieuxuat" value="">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="ngaynhap" class="form-label">Ngày xuất</label>
                                                                        <input type="date" class="form-control" name="ngaynhap" value="">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                      <label for="tennhanvien" class="form-label">Tên nhân viên</label>
                                                                      <input type="text" class="form-control" name="tennhanvien" value="">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="manhanvien" class="form-label">Mã nhân viên</label>
                                                                        <input type="text" class="form-control" name="manhanvien" value="">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="tennhacungcap" class="form-label">Nhà cung cấp</label>
                                                                        <input type="text" class="form-control" name="manhacungcap" value="">
                                                                    </div>
                                                                <div class="row pt-5"></div>

                                                                <table class="table table-bordered table-hover table-sortable" id="tab_logic1">
                                                                    <thead>
                                                                        <tr>
                                                                            
                                                                            <th id="masnpham">Mã sản phẩm</th>
                                                                            <th id="tensanpham">Tên sản phẩm</th>
                                                                            <th id="soluong">Số lượng</th>
                                                                            <th id="dongia">Đơn giá</th>
                                                                            
                                                                            <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr id='addr0' data-id="0" class="hidden">
                                                                            <td data-name="masanpham">
                                                                                <input type="text" name='masanpham' class="form-control" value=""/>
                                                                            </td>
                                                                            <td data-name="tensanpham">
                                                                                <input type="text" name='tensanpham' class="form-control" value=""/>
                                                                            </td>
                                                                            <td data-name="soluong">
                                                                                <input type="text" name='soluong' class="form-control" value=""/>
                                                                            </td>
                                                                            <td data-name="dongia">
                                                                                <input type="text" name='dongia' class="form-control" value=""/>
                                                                            </td>

                                                                            <td data-name="del">
                                                                                <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                
                                                            </div>
                                                        </div>
                                                        <a id="add_row1" class="btn btn-primary float-right">Thêm hàng</a>

                                                        <div class="row clearfix pt-5">
                                                            <div class="col-md-12 table-responsive">
                                                                    <div class="mb-3">
                                                                        <label for="ghichu" class="form-label">Ghi chú</label>
                                                                        <input type="text" class="form-control" name="ghichu" value=" ">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="tongtien" class="form-label">Tổng tiền bằng số</label>
                                                                        <input type="text" class="form-control" name="tongtien" value="">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="tongtienchu" class="form-label">Tổng tiền bằng chữ</label>
                                                                        <input type="text" class="form-control" name="tongtienchu" value="">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <button type="submit" class="btn btn-primary btnLapphieuxuat">Xác nhập lập phiếu</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pt-3 col-12">
                                            <div class="data_table">
                                                <table id="table_xuatkho" class="table table-striped table-bordered">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th id="maphieuxuat">Mã phiếu xuất</th>
                                                            <th id="ngayxuat">Ngày xuất</th>
                                                            <th id="tongtien">Tổng tiền</th>
                                                            <th id="manhanvien">Mã nhân viên</th>
                                                            <th id="manhacc">Mã nhà cung cấp</th>
                                                            <th id="ghichu">Ghi chú</th>
                                                            <th id="hanhdong">Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($xuatkho as $value)
                                                        <tr>
                                                            <th>{{$value->MA_PHIEU_XUAT}}</th>
                                                            <td>{{$value->NGAY_LAP}}</td>
                                                            <td>{{number_format($value->TONG_TIEN,0)}} VNĐ</td>
                                                            <td>{{$value->TEN_NV}}</td>
                                                            <td>{{$value->TEN_NCC}}</td>
                                                            <td>{{$value->GHI_CHU}}</td>
                                                            <td><a href=""><i class="fa-regular fa-eye"></i></a></td>
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
                                        <h4 class="col-lg-5">Chi tiết phiếu xuất</h4>
                                        

                                        
                                        <!-- Code thừa nhưng không xóa, xóa bị lỗi giao diện :(( -->
                                        <div class="" id="" tabindex="" aria-labelledby="" aria-hidden="">
                                            <div class="">
                                                <div class="">
                                                    <div class="">
                                                    <h1 class="" id=""></h1>
                                                  
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- Code thừa nhưng không xóa, xóa bị lỗi giao diện :(( -->
                                    </div>

                                    

                                    <div class="row pt-3 col-12">
                                        <div class="data_table">
                                            <table id="table_ctxuat" class="table table-striped table-bordered">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th id="maphieuxuat">Mã phiếu xuất</th>
                                                        <th id="mahanghoa">Mã sản phẩm</th>
                                                        <th id="soluong">Số lượng</th>
                                                        <th id="donvi">Đơn vị tính</th>
                                                        <th id="dongia">Đơn giá</th>
                                                    </tr>
                                                </thead>
                                                <tbody>                                          
                                                    <tr>
                                                        <th>PX001</th>
                                                        <td>001</td>
                                                        <td>45,000,000 VNĐ</td>
                                                        <td>34</td>
                                                        <td>Cái</td>
                                                    </tr>
                                                    <tr>
                                                        <th>PX001</th>
                                                        <td>002</td>
                                                        <td>65,000,000 VNĐ</td>
                                                        <td>11</td>
                                                        <td>Cái</td>
                                                    </tr>
                                                    <tr>
                                                        <th>PX001</th>
                                                        <td>003</td>
                                                        <td>45,000,000 VNĐ</td>
                                                        <td>76</td>
                                                        <td>Cái</td>
                                                    </tr>
                                                    <tr>
                                                        <th>PX001</th>
                                                        <td>004</td>
                                                        <td>23,000,000 VNĐ</td>
                                                        <td>23</td>
                                                        <td>Cái</td>
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
                    @stop