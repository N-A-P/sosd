<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
        return view('pages.index');
   }
   public function about(){
       return view('pages.about');
   }
   public function lienhe(){
       return view('pages.lien-he');
   }
   public function dichvu(){
       return view('pages.Dichvu');
   }
   public function giupviec(){
       
       return view('pages.giup-viec-gia-dinh');
   }
}
