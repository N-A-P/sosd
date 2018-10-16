<?php

namespace App\Http\Controllers;
use App\tintuc;
use App\nhanvien;
use Illuminate\Http\Request;
use DB;
class PagesController extends Controller
{
   public function index(){
      
        $maids = nhanvien::all()->random(12);
        return view('pages.index')->with('maids',$maids);
   }
   public function about(){
       return view('pages.about');
   }
   public function nhanvien(){
       $data = nhanvien::orderBy('id','desc')->paginate(12);
       $arr = array();
       for($i = 0; $i < count($data); $i++){
          $arr['b'.$i] = explode(" ",$data[$i]->created_at);
       }

    return view('pages.nhan-vien')->with('data',$data)->with('arr',$arr);
    }
   public function lienhe(){
       return view('pages.lien-he');
   }
   public function dichvu(){
       return view('pages.Dichvu');
   }
   public function tintuc(){
        
        $data = tintuc::all('id', 'tieude', 'thumbnail');
       return view('pages.tintuc')->with('data',$data);
   }
   public function chitietnhanvien($id){
       $data = nhanvien::where('id',$id)->get();
       $more = nhanvien::all()->random(7);
       $check =false;
       for($i = 0; $i < count($more); $i++){
            $arr['b'.$more[$i]->id] = explode(" ",$more[$i]->created_at);
            if( $more[$i]==$id || ($i == 6 && $check == false) )
            {
                unset($more[$i]);
                $check = true;
            } 
        }        
       return view('pages.nhanvien-chitiet')->with('data',$data)->with('more',$more)->with('arr',$arr);
   }
   public function giupviec(){
       return view('pages.giupviecgiadinh');
   }
}
