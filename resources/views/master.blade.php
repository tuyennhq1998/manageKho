<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
    nomodule
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('./css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('./css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('./css/style.css')}}">

</head>
<body>

    <nav class="navbar navbar-expand-lg nav-header navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            

            <div class="collapse navbar-collapse justify-content-end"  id="collapsibleNavbar">
                <ul class="navbar-nav me-2o mb-2 mb-lg-0 mr-5">                    
                    <li class="nav-item">
                        <a href="" data-bs-toggle="modal" data-bs-target="#thongtintaikhoan"><img src="./img/user.png" alt="" id="user_img" class="me-2"></a>
                    </li>
                    <li class="nav-item">
                        <p class="welcome me-1">Chào mừng,  </p>
                    </li>
                    <li class="nav-item">
                        <p class="fullname me-3" id="tennhanvien" >Hoàng Quân</p>
                    </li>
                </ul>
                <button class="btn logout btn-primary" type="button">Đăng xuất</button>
            </div>

            <div class="modal fade" id="thongtintaikhoan" tabindex="-1" aria-labelledby="thongtintaikhoanLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="thongtintaikhoanLabel">Thông tin tài khoản</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                              <label for="tennhanvien" class="form-label">Họ và tên</label>
                              <input type="text" class="form-control" id="tennhanvien" value="" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="" disabled>
                              </div>
                            <div class="mb-3">
                                <label for="sdt" class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control" id="sdt" value="" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">username</label>
                                <input type="text" class="form-control" id="username" value="" disabled>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="container">
        <div class="row pt-5">
            
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                <div class="container">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link" href="{{url('home')}}">Sản phẩm</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('categories')}}">Danh mục</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('lohang')}}">Lô hàng</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('donvisanpham')}}">Đơn vị sản phẩm</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('kehang')}}">Kệ hàng</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('nhapkho')}}">Nhập kho</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('xuatkho')}}">Xuất kho</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('nhasanxuat')}}">Nhà sản xuất</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('nhacungcap')}}">Nhà cung cấp</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('nhanvien')}}">Nhân viên</a></li>
                    </ul>

                    <div class="tab-content">
                        @yield('content')
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>

    <script src="{{ URL::asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ URL::asset('js/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('js/pdfmake.min.js')}}"></script>
    <script src="{{ URL::asset('js/vfs_fonts.js')}}"></script>
    <script src="{{ URL::asset('js/custom.js')}}"></script>

    <!-- <script>
           
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
    </script>  -->
</body>
</html>