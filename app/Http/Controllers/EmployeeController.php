<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.qly-themnguoigv');
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
        $nv->nganhnghe = $request->input('nganhnghe');
        $nv->kinhnghiem = $request->input('kinhnghiem');
        $nv->kinhnghiem_tomtat = $request->input('kinhnghiem_tomtat');
        $nv->save();
    
       return redirect('/adm/addmaids')->with('success','Thêm nhân viên thành công');
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
        //
    }
}
