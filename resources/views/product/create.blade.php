@extends('layout.logmain')

@section('name')
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                         @foreach ($errors->all() as $error)
                          <span class="d-block">{{ $error }}</span>
                           @endforeach
                         </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-danger">{{ session('success')}}</div>
                        @endif
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Insert Product</h3></div>
                    <div class="card-body">
                        <div>

                        </div>
                        <form method="POST">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Nhập tên sản phẩm" />
                                        <label for="name">Tên sản phẩm</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" name="img" id="img" type="text" placeholder="Nhập hình ảnh " />
                                        <label for="img">Hình ảnh</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="matour" id="matour" type="text" placeholder="Nhập mã tour" />
                                        <label for="matour">Mã Tour</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="gia" id="gia" type="text" placeholder="Nhập giá của tour" />
                                        <label for="gia">Giá tour</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" name="xuatphat" id="xuatphat" type="text" placeholder="Nhập thời gian xuất phát" />
                                <label for="xuatphat">Xuất phát</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="diemdl" id="diemdl" type="text" placeholder="Nhập Điểm du lịch" />
                                <label for="diemdl">Điểm du lịch</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="chitiet" id="chitiet" type="text" placeholder="Nhập Chi tiết" />
                                <label for="chitiet">Chi tiết</label>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="ngaykhoihanh" id="ngaykhoihanh" type="text" placeholder="Nhập ngày khởi hành" />
                                        <label for="ngaykhoihanh">Ngày khởi hành</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="thoigiantour" id="thoigiantour" type="text" placeholder="Nhập thời gian tour" />
                                        <label for="thoigiantour">Thời gian tour</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="lttour" id="lttour" type="text" placeholder="Nhập lịch trình tour" />
                                        <label for="lttour">Lịch trình tour</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="socho" id="socho" type="number" placeholder="Nhập số chỗ" />
                                        <label for="socho">Số chỗ</label>
                                    </div>
                                </div>
                            </div>

                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Thêm sản phẩm</button></div>
                            </div>
                            @csrf
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
