<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tintuc;
use Response;

class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           return view('admin.tintuc.show');
    }
    public function ajax_getlist(){
         $data = tintuc::all('id','noidung','tieude','thumbnail','luotxem','created_at');
         return Response::json(json_decode($data),200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tintuc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new tintuc;
        if($request->hasFile('thumbnail'))
        {
            $request->file('thumbnail')->store('public/images');
            $file_name = 'http://giupviechtp.com/storage/images/'.$request->file('thumbnail')->hashName();
            $model->thumbnail = $file_name;
        }
        $model->tieude = $request->input('tieude');
        $model->tomtat = $request->input('tomtat');
        $model->noidung = $request->input('noidung');
        $model->save();
    
       return redirect('/adm/addnews')->with('success','Đã đăng bài viết');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(tintuc::destroy($id)){
            echo 'Đã xóa';
        }
        else
        {
            echo 'err! something wrong';
        }
    }
}
