<?php
namespace App\CRUD;
use App\Models\Menu;
use Illuminate\Support\Str;
class _Menu{
    public function create($data){
       try{
        $result=Menu::create([
            'name' =>$data['name'],
            'slug'=>Str::slug($data['name']),
            'img'=>$data['img'],
            'link'=>$data['link'],
            'mota' =>$data['mota'],
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
    public function getAllMenu(){
        try{
            $data= Menu::select('*')->get();
            return $data;
        }
        catch(\Exception $e){
            return $e;
        }
    }
}
?>
