@extends('master')
@section('content')
                        <div class="tab-pane active" id="sanpham">
                            <div class="row g-0 rounded ">
                                <div class="col p-4">
                                    <div class="row">
                                    <div class="row justify-content-between">
                                            <h4 class="col-lg-5">Quản lý sản phẩm</h4>
                                            <button type="button" class="btn btn-primary btnDanhmuc" data-bs-toggle="modal" data-bs-target="#themdanhmuc">
                                                Thêm sản phẩm
                                            </button>
                                            <div class="modal fade" id="themdanhmuc" tabindex="-1" aria-labelledby="themdanhmucLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="themdanhmucLabel">Thêm sản phẩm</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{url('themsanpham')}}" method="post">
                                                    <div class="modal-body">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="madanhmuc" class="form-label">Mã sản phẩm</label>
                                                                <input type="text" class="form-control" id="madanhmuc" name="masanpham" readonly>
                                                              </div>
                                                            <div class="mb-3">
                                                              <label for="tendanhmuc" class="form-label">Tên sản phẩm</label>
                                                              <input type="text" class="form-control" id="tendanhmuc" name="tensanpham" onkeyup="string_to_slug()">
                                                            </div>
                                                            <div class="mb-3">
                                                              <label for="tendanhmuc" class="form-label">Đơn giá</label>
                                                              <input type="text" class="form-control" name="dongia">
                                                            </div>
                                                            <div class="mb-3">
                                                              <label for="tendanhmuc" class="form-label">Tên danh mục</label>
                                                            <select class="form-select form-select-sm form-control" aria-label=".form-select-sm example" name="madanhmuc">
                                                                    <option selected>Chọn tên danh mục</option>
                                                                    @foreach($danhmuc as $value)
                                                                    <option value="{{$value->MA_DM}}">{{$value->TEN_DM}}</option> @endforeach
                                                                    
                                                            </select>
                                                        </div>
                                                            <div class="mb-3">
                                                              <label for="tendanhmuc" class="form-label">Tên nhà sản xuất</label>
                                                              <select class="form-select form-select-sm form-control" aria-label=".form-select-sm example" name="manhasanxuat">
                                                                    <option selected>Chọn nhà sản xuất</option>
                                                                    @foreach($nhasanxuat as $value)
                                                                    <option value="{{$value->MA_NSX}}">{{$value->TEN_NSX}}</option> @endforeach
                                                                    
                                                            </select>                                                                </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <button type="submit" class="btn btn-primary btnThemdanhmuc">Thêm</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
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
                        <script>
function string_to_slug () {
    str = document.getElementById("tendanhmuc").value;

    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();
  
    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to   = "aaaaeeeeiiiioooouuuunc------";
    for (var i=0, l=from.length ; i<10 ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
        .replace(/\s+/g, '-') // collapse whitespace and replace by -
        .replace(/-+/g, '-'); // collapse dashes

    document.getElementById("madanhmuc").value = str;
}
</script>
                    @stop