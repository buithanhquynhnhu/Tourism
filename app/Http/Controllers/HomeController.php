<?php

namespace App\Http\Controllers;
use App\CRUD\_Product;
use App\CRUD\_Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function __construct(_Product $product,_Menu $menu){
        $this->menu=$menu;
        $this->product=$product;
    }
    public function index(){

   /*$data=[
        'name' =>'Du lịch HN- Hạ Long - Bãi Đính, Tràng An - Sapa, Fansipan 5 ngày 4 đêm (tour tiêu chuẩn )',
        'img'=>'/images/4.jpg',
        'matour'=>'HLSP-5N',
        'gia'=>8500000 ,
        'ngaykhoihanh'=>'Thứ 2, Thứ 4, Thứ 5, Thứ 7 Hàng Tuần',
        'thoigiantour'=>'5 Ngày',
        'xuatphat'=>'Khởi hành 63 tỉnh/TP',
        'diemdl'=>'Du lịch Hà Nội Hạ Long Sapa',
        'lttour'=>'',
        'socho'=>30,
        'chitiet'=>''
    ];
        dd($this->product->create($data));*/
         //dd($this->product->getAllProduct());
        //$data=$this->product->getAllProduct();
        $data=$this->product->getProductWhere();
        return view('index',['data'=>$data]);
    }
    /*public function menu(){
        $data=[
            'name' =>'Tour Hà Giang',
            'img'=>'/images/5.jpg',
            'link'=>'',
            'mota' =>'Phong cảnh đẹp, hữu tình',
            'chitiet'=>'Vé đã bao gồm phí khách sạn ,ăn uống'
        ];
        //dd($this->menu->create($data1));
        dd($this->menu->getAllMenu());
        $data1=$this->menu->getAllMenu();
        return view('index',['data'=>$data]);
    }*/
    public function create(Request $request){
        if($request->isMethod('POST')){
            $request->validate([
                'name'=>'required',
                'img'=>'required',
                'matour'=>'required',
                'gia'=>'required',
                'ngaykhoihanh'=>'required',
                'thoigiantour'=>'required',
                'xuatphat'=>'required',
                'diemdl'=>'required',
                'lttour'=>'required',
                'socho'=>'required',
                'chitiet'=>'required',
            ],[
                'name.required'=>'Không được bỏ trống trường Tên sản phẩm',
                'img.required'=>'Không được bỏ trống trường Hình ảnh',
                'matour.required'=>'Không được bỏ trống trường Mã tour',
                'gia.required'=>'Không được bỏ trống trường Giá tour',
                'ngaykhoihanh.required'=>'Không được bỏ trống trường Ngày khởi hành',
                'thoigiantour.required'=>'Không được bỏ trống trường Thời gian tour',
                'xuatphat.required'=>'Không được bỏ trống trường Xuất phát',
                'diemdl.required'=>'Không được bỏ trống trường Điểm du lịch',
                'lttour.required'=>'Không được bỏ trống trường Lịch trình tour',
                'socho.required'=>'Không được bỏ trống trường Số chỗ',
                'chitiet.required'=>'Không được bỏ trống trường Chi tiết',
            ]

        );
            $data=$request->input();
            dd($this->product->create($data));
            $request->session()->flash('success','Thêm dữ liệu thành công');
            //$request->session()->flash('message', $result);
            return view('product.create');

        }else{
            return view('product.create');
        }

     }
    public function cb(){
        return view('home');
     }
     public function index1(){
        return view('home');
     }

    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function services(){
        return view('services');
    }
    public function elements(){
        return view('elements');
    }
    //public function index(){
       // $thu='Thu 4';
        //return view('home',['thu'=>$thu]);
//}
public function login(){
    return view('login');
}
public function register(){
    return view('register');
}

}
