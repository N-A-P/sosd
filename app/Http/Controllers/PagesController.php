<?php

namespace App\Http\Controllers;
use App\tintuc;
use App\nhanvien;
use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
        return view('pages.index');
   }
   public function about(){
       return view('pages.about');
   }
   public function nhanvien(){
    return view('pages.nhan-vien');
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
       $array = preg_split ("/$\R?^/m", $data[0]->kinhnghiem);
       return view('pages.nhanvien-chitiet')->with('data',$data)->with('exp',$array);
   }
   public function giupviec(){
       return view('pages.giupviecgiadinh');
   }
}
