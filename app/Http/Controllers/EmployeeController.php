<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use DB;
use Response;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.nhanvien.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nv = new nhanvien;
        $nv->fill($request->all());
        if($request->hasFile('anh'))
        {
            $request->file('anh')->store('public/images');
            $file_name = $request->file('anh')->hashName();
            $nv->anh =$file_name;
        }
        $nv->ten = $request->input('ten');
        $nv->namsinh = $request->input('namsinh');
        $nv->quequan = $request->input('quequan');
        $nv->nganhnghe ='asd';// $request->input('nganhnghe');
        $nv->kinhnghiem = $request->input('kinhnghiem');
        $nv->kinhnghiem_tomtat = $request->input('kinhnghiem_tomtat');
        $nv->trang_thai = 0;
        $nv->save();
    
       return back()->with('success','Thêm nhân viên thành công');
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_nv(){
        return view('admin.nhanvien.show');
    }
    public function list_nv_ajax(Request $request){
        $list = nhanvien::all('id','ten','nganhnghe','quequan','namsinh','trang_thai');
        return Response::json(json_decode($list),200);
       // return view('admin.maidList',['list_nv'=>$data]);
    }
    public function list_nganh(){
        $list = DB::table('nganh')->select('nganh_nghe')->get();
        $data = json_decode($list);
        return view('admin.maidList',['list_nganh'=> $data]);
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
        nhanvien::where('id',$id)->delete();
        return redirect('/adm/maidslist')->with('success','Da xoa thanh cong nhan vien ' .  $id);
    }
}
