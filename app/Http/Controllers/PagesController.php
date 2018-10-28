<?php

namespace App\Http\Controllers;
use App\tintuc;
use App\nhanvien;
use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
   public function index(){
        $news = tintuc::orderBy('id','desc')->take(3)->get();  
        $maids = nhanvien::all()->random(12);
        return view('pages.index')->with('maids',$maids)->with('news',$news);
   }
   public function about(){
       $news  = tintuc::orderBy('id','desc')->take(5)->get();
       return view('pages.about')->with('news',$news);
   }
  
   public function lienhe(){
    $news  = tintuc::orderBy('id','desc')->take(5)->get();
       return view('pages.lien-he')->with('news',$news);
   }
   public function dichvu(){
    $news  = tintuc::orderBy('id','desc')->take(5)->get();
       return view('pages.Dichvu')->with('news',$news);
   }
   public function tintuc(){
    $news  = tintuc::orderBy('id','desc')->take(5)->get();
        $data = tintuc::all('id', 'tieude', 'thumbnail');
       return view('pages.tintuc')->with('data',$data)->with('news',$news);
   }
   public function tintuc_chitiet($id){
        $data = tintuc::find($id);
        $news  = tintuc::orderBy('id','desc')->take(5)->get();      
       return view('pages.tintuc-chitiet')->with('data',$data)->with('news',$news);
   }

   public function nhanvien(){
        $news  = tintuc::orderBy('id','desc')->take(5)->get();
        $data = nhanvien::orderBy('id','desc')->paginate(12);
        $arr = array();
        for($i = 0; $i < count($data); $i++){
        $arr['b'.$i] = explode(" ",$data[$i]->created_at);
        }
        return view('pages.nhan-vien')->with('data',$data)->with('arr',$arr)->with('news',$news);
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
        $news  = tintuc::orderBy('id','desc')->take(5)->get();        
       return view('pages.nhanvien-chitiet')->with('data',$data)->with('more',$more)->with('arr',$arr)->with('news',$news);
   }
   public function giupviec(){
        $news  = tintuc::orderBy('id','desc')->take(5)->get();
       return view('pages.giupviecgiadinh')->with('news',$news);
   }
}
