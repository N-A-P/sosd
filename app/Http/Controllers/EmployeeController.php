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
        if($request->hasFile('anh')){
            if($request->file('anh')->isValid()){
                $extd = strtoupper($request->file('anh')->getClientOriginalExtension());

                if($extd == 'JPG' || $extd == 'PNG' || $extd == 'JPEG' || $extd == 'GIF' )
                {
                    $request->file('anh')->store('public/images');
                    $file_name = $request->file('anh')->hashName();
                    $nv->anh =$file_name;
                }
                else
                    return back()->with('error','Chỉ chấp nhận các file ảnh có định dạng jpg, png và gif');
            }
        }
        else
        {
            $nv->anh = 'default.png';
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
        $info = nhanvien::find($id);
        return view('admin.nhanvien.edit')->with('info',$info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    
        if($model = nhanvien::find($request->id)){
            $model->ten = $request->ten;
            $model->namsinh = $request->namsinh;
            $model->quequan = $request->quequan;
            $model->nganhnghe = $request->nganhnghe;
            $model->kinhnghiem = $request->kinhnghiem;
            $model->kinhnghiem_tomtat = $request->kinhnghiem_tomtat;
            $model->trang_thai = $request->trangthai;
            if($request->hasFile('anh'))
            {
                if($request->file('anh')->isValid()){
                    $extd = strtoupper($request->file('anh')->getClientOriginalExtension());
                    if($extd == 'JPG' || $extd == 'PNG' || $extd == 'JPEG' || $extd == 'GIF' )
                   {
                        $request->file('anh')->store('public/images');
                        $file_name = $request->file('anh')->hashName();
                        $model->anh =$file_name;
                    }
                    else
                        return back()->with('error','Chỉ chấp nhận các file ảnh có định dạng jpg, png và gif');
                }
                
            }
            $model->save();
        }
        return redirect('/nhanvien/'.$request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(nhanvien::destroy($id)){
            echo 'Đã xóa';
        }
        else
        {
            echo 'err! something wrong';
        }
    }
}
