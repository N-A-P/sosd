@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
    @include('layouts.message')
    <div class="col col-lg-1"></div>
    <div class="col col-lg-4">
        <form action="/adm/crawlEmp" method="POST">
            @csrf
                    <h2 > Nhân viên</h2> <br>
                    <div class="form-group">
                            <label for="web">Web:</label>
                            <select class="form-control" name="web" id="web">
                                <option value="1">giupvieccici.vn</option>
                            </select>
                            <label>Số lượng:</label>
                            <select class="form-control" name="soluong" id="soluong">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                            </select>
                    </div>
                    <div class="checkbox">
                            <label><input type="checkbox" name="check" >Lấy trùng ngày</label>                            
                    </div>
                    <br>
                        <button type="submit" class="btn btn-primary">Crawl</button>         
            </form>
    </div>
    <div class="col col-lg-1"></div>
   
    <div class="col col-lg-4">
            <form action="" method="POST">
                    @csrf
                        <h2 > Tin tức</h2> <br>
                        <div class="form-group">
                                <label >Web:</label>
                                <select class="form-control" name="" id="">
                                    <option value="1">Vietnamnet</option>
                                    <option value="2">dantri.com</option>
                                   
                                </select>
                                <br>
                                <button class="btn btn-primary">Crawl</button>
                        </div>            
                </form>
        </div>
</div>

@endsection