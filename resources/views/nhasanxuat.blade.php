@extends('master')
@section('content')
                        <div class="tab-pane active" id="nhasx">
                            <div class="row g-0 rounded ">
                                <div class="col p-4">
                                    <div class="row">
                                        <div class="row justify-content-between">
                                                <h4 class="col-lg-5">Quản lý nhà sản xuất</h4>
                                                <button type="button" class="btn btn-primary btnKe" data-bs-toggle="modal" data-bs-target="#themke">
                                                    Thêm nhà sản xuất
                                                </button>
                                                <div class="modal fade" id="themke" tabindex="-1" aria-labelledby="themkeLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="themkeLabel">Thêm nhà sản xuất</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="{{url('themnhasanxuat')}}" method="post">
                                                            @csrf
                                                        <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="make" class="form-label">Mã Nhà Sản Xuất</label>
                                                                    <input type="text" class="form-control" name="manhasanxuat" id="manhasanxuat">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="make" class="form-label">Tên Nhà Sản Xuất</label>
                                                                    <input type="text" class="form-control" name="tennhasanxuat" id="tennhasanxuat" onkeyup="string_to_slug()" >
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                            <button type="submit" class="btn btn-primary btnThemke">Thêm</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
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
                        <script>
function string_to_slug () {
    str = document.getElementById("tennhasanxuat").value;

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

    document.getElementById("manhasanxuat").value = str;
}
</script>
                   @stop