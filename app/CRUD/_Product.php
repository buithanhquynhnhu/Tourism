<?php
namespace App\CRUD;
use App\Models\Product;
use Illuminate\Support\Str;

class _Product{
    public function create($data){
       try{
        $result=Product::create([
            'name' =>$data['name'],
            'slug'=>Str::slug($data['name']),
            'img'=>$data['img'],
            'matour'=>$data['matour'],
            'gia'=>$data['gia'],
            'ngaykhoihanh'=>$data['ngaykhoihanh'],
            'thoigiantour'=>$data['thoigiantour'],
            'xuatphat'=>$data['xuatphat'],
            'diemdl'=>$data['diemdl'],
            'lttour'=>$data['lttour'],
            'socho'=>$data['socho'],
            'chitiet'=>$data['chitiet']
        ]);
        if($result->id >0){
            return "Thêm dữ liệu thành công";
        }
        else{
            return "Thêm dữ liệu thất bại";
        }
       }
       catch(\Exception $e){
        return $e;
       }
    }
    public function getAllProduct(){
        try{
            $data= Product::select('*')->get();
            return $data;
        }
        catch(\Exception $e){
            return $e;
        }
    }
    public function getProductWhere(){
        try{
            $data= Product::where('name','like','%'.''.'%')->get();
            return $data;
        }
        catch(\Exception $e){
            return $e;
        }
    }
    /*public function updateProduct($query,$data){
        try{
            $data= Product::where('name',$query)->update([
                'name' =>$data['name'],
                'slug'=>Str::slug($data['name']),
                'img'=>$data['img'],
                'matour'=>$data['matour'],
                'gia'=>$data['gia'],
                'ngaykhoihanh'=>$data['ngaykhoihanh'],
                'thoigiantour'=>$data['thoigiantour'],
                'xuatphat'=>$data['xuatphat'],
                'diemdl'=>$data['diemdl'],
                'lttour'=>$data['lttour'],
                'socho'=>$data['socho'],
                'chitiet'=>$data['chitiet']
            ]);
            if($data>0)
            return 'Cập nhật dữ liệu thành công';
        }
        catch(\Exception $e){
            return $e;
        }
    }*/
}
?>
