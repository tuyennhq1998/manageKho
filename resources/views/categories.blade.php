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
                                                    <form action="{{url('themdanhmuc')}}" method="post">
                                                    <div class="modal-body">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="madanhmuc" class="form-label">Mã danh mục</label>
                                                                <input type="text" class="form-control" id="madanhmuc" name="madanhmuc" readonly>
                                                              </div>
                                                            <div class="mb-3">
                                                              <label for="tendanhmuc" class="form-label">Tên danh mục</label>
                                                              <input type="text" class="form-control" id="tendanhmuc" name="tendanhmuc" onkeyup="string_to_slug()">
                                                            </div>
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
<script>
function string_to_slug () {
    str = document.getElementById("tendanhmuc").value;

    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();
  
    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to   = "aaaaeeeeiiiioooouuuunc------";
    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
        .replace(/\s+/g, '-') // collapse whitespace and replace by -
        .replace(/-+/g, '-'); // collapse dashes

    document.getElementById("madanhmuc").value = str;
}
</script>
@stop