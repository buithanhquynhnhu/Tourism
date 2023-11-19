@extends('layout.logmain')

@section('name')
<div class="container">
    <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                            <div class="card-body">
                                <div>
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
                                          @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                                </div>
                                <form method="POST">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="lname" id="inputFirstName" type="text" placeholder="Nhập họ" />
                                                <label for="inputFirstName">Họ</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" name="fname" id="inputLastName" type="text" placeholder="Nhập tên" />
                                                <label for="inputLastName">Tên</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="email" id="inputEmail" type="email" placeholder="Nhập email" />
                                        <label for="inputEmail">Email</label>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="pass" id="inputPassword" type="password" placeholder="Nhập mật khẩu" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="pass_confirmation" id="inputPasswordConfirm" type="password" placeholder="Nhập xác nhận mật khẩu" />
                                                <label for="inputPasswordConfirm">Xác nhận mật khẩu</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Tạo tài khoản</button></div>
                                    </div>
                                    @csrf
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="{{route('login')}}">Có một tài khoản? Đi đến đăng nhập</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
