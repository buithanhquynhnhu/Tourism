@extends('layout.logmain')

@section('name')
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
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
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" name="email" value="" type="email" placeholder="name@example.com" />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" name="password"  value="" type="password" placeholder="Password" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword"  name="remember" type="checkbox" value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html">Forgot Password?</a>
                                        <button class="btn btn-primary" type="submit">Login</a>
                                    </div>
                                    @csrf
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="{{route('register')}}">Cần một tài khoản? Đăng ký!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
