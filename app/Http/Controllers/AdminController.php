<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use Response;
use Auth;

class AdminController extends Controller
{
    //
    public function lienhe(Request $req){
    }

    public function index(){
        return view('admin.crawl');
    }
    public function logout(){
        Auth::logout(); 
        return redirect('/login');
    }
    public function crawlEmp(Request $req)
    {
        include ('../vendor/simpleHTMLDOM/simple_html_dom.php');
        if($req->web == '1')
        {
            $html = file_get_html('https://giupvieccici.vn/category/nhan-vien/');
        }
        $sl = $req->soluong;
        if($req->has('check'))
            $check = true;
        else
            $check = false;
        $data = array();
        $data = $html->find('div.col-md-4');
        array_splice($data,$sl,20);
        $count = 0;
         foreach($data as $el){
                try{
                    /*echo $model->ten.' <br />';
                    echo $model->namsinh.' <br />';
                    echo $model->quequan.' <br />';
                    echo '<img src ="'.$model->anh.'" /> <br />';
                    echo $model->kinhnghiem_tomtat.' <br />';
                    echo $model->kinhnghiem.' <br />';
                    echo $child[3]->first_child()->plaintext;
                    echo '<hr />';*/
                    $child =  $el->children();
                    //if($child[3]->first_child()->plaintext)
                    $model = new nhanvien();
                    
                    $model->anh = $child[0]->first_child()->src;
                    $model->ten = $child[1]->first_child()->plaintext;
                    $model->nganhnghe = 'khac';
                    $model->trang_thai = 0;
                    $detail = file_get_html($child[0]->href);
                    $content = $detail->find('div.entry-content')[0]->children();
                    $model->namsinh = substr($content[0]->plaintext,-4,4);
                    $model->quequan = substr($content[1]->plaintext,6);
                    $model->kinhnghiem_tomtat = substr($content[3]->plaintext,15);
                    $model->kinhnghiem = $content[4]->__tostring();
                    $model->save();
                    $count +=1;
                }catch(Exception $e){
    
                }
         }

        return back()->with('success','Đã thêm '.$count.' nhân viên'.$req->check);        
    }
}
