<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dangky(Request $request){
        if($request->isMethod('POST')){

            $request->validate([
                'lname'=>'required',
                'fname'=>'required',
                'email'=>'required|email|unique:users',
                'pass'=>'required|confirmed|min:6',
                'pass_confirmation'=>'required',
            ],[
                'lname.required'=>'Không được bỏ trống trường Họ',
                'fname.required'=>'Không được bỏ trống trường Tên',
                'email.required'=>'Không được bỏ trống trường Email',
                'email.email'=> 'Không đúng định dạng email',
                'email.unique'=>'Email đã được sử dụng',
                'pass.required'=>'Không được bỏ trống trường Mật khẩu ',
                'pass.confirmed'=>'Xác nhận mật khẩu không đúng',
                'pass.min'=>'Mật khẩu ít nhất 6 ký tự',
                'pass_confirmation.required'=>'Không được bỏ trống trường Xác nhận mật khẩu',
            ]);
            try{
                $result= User::create([
                    'name' =>$request->input('fname'),
                    'email'=>$request->input('email'),
                    //'password'=>$request->input('pass'),
                    'password'=>Hash::make($request->input('pass')),
                ]);
                if($result->id>0){
                    $request->session()->flash('success','Thêm dữ liệu thành công');
                    //return redirect()->route('index');

                }else
                {
                    $request->session()->flash('error','Lỗi thêm dữ liệu ');
                }
            } catch (\Exception $e) {
                $request->session()->flash('error', $e);
            }
        }
        return view('user.dangky');
    }
    public function dangnhap(Request $request){
        if($request->isMethod('POST')){

           $data= $request->validate([

                'email'=>'required|email',
                'password'=>'required',

            ],[

                'email.required'=>'Không được bỏ trống trường Email',
                'email.email'=> 'Không đúng định dạng email',
                'password.required'=>'Không được bỏ trống trường Mật khẩu ',
            ]);
            if(Auth::attempt($data)){
                $request->session()->regenerate();
                return redirect()->route('sanpham');
            }
            return back()->withErrors([
                'email'=>'Email hoặc mật khẩu không đúng'
            ]);

    }

    return view('user.login');
}
}
