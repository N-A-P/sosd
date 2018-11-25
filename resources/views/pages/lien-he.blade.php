@extends('layouts.header')
@section('content')
<nav class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-text">
            <span><span><a href="index.html">Trang chủ</a> » <span class="breadcrumb_last">Liên hệ</span></span></span>
        </div>
    </div>
</nav>
<section class="clearfix">
    <div class="container">
        <div class="col-md-8 singlee">
            <div class="posts-detail">
              
                  <div class=" entry-content">
                  
                       <h2 style="text-align: center;"><span style="font-family: arial, helvetica, sans-serif;"><b><span style="color: #000000;">CÔNG TY TNHH DỊCH VỤ HTP</span><br />
    </b></span></h2>
    <h3 style="text-align: center;" align="center"><span style="font-family: arial, helvetica, sans-serif;">CUNG CẤP GIÚP VIỆC CAO CẤP TẠI VIỆT NAM<br />
    ĐỊA CHỈ: 298, Cầu Diễn, Quận Bắc Từ Liêm, Hà Nội.</span></h3>
    <p align="center"><span style="font-family: arial, helvetica, sans-serif;"><b> </b></span></p>
    <blockquote><p><span style="font-size: large; font-family: arial, helvetica, sans-serif; color: #000000;">Website: <a href="index.html" target="_blank" rel="noopener">giupviechtp.vn</a></span></p>
    <p><span style="font-size: large; font-family: arial, helvetica, sans-serif; color: #000000;"> Email: giupviechtp@gmail.com</span></p>
    <p><span style="font-size: large; font-family: arial, helvetica, sans-serif; color: #000000;">SĐT: 0359571956</span></p></blockquote>
    <div class="form-lh"><div role="form" class="wpcf7" id="wpcf7-f429-p161-o1" lang="vi" dir="ltr">
    <div class="screen-reader-response"></div>
    <form action="/as" method="post" class="wpcf7-form" novalidate="novalidate">
        {{csrf_field()}}
    <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ và tên" /></span><br />
    <span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" /></span><br />
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Địa chỉ Email" /></span><br />
    <span class="wpcf7-form-control-wrapph"><input type="date" name="date" value="Đặt ngày giờ" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" /></span><br />
    <span class="wpcf7-form-control-wrap address"><textarea name="noidung" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Nhập địa chỉ và yêu cầu của bạn"></textarea></span></p>
    <p><input type="submit" value="GỬI ĐĂNG KÍ" class="wpcf7-form-control wpcf7-submit" /></p>
    <div class="wpcf7-response-output wpcf7-display-none"></div></form>
    
    </div></div>
    <h3>ĐỊA CHỈ HTP TRÊN BẢN ĐỒ</h3>
    <p><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.9991311608335!2d105.78782828280657!3d21.03282505945223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4962c1238f%3A0xc1e7786ffb665b2!2zMTAgUGjhu5EgVGjhu40gVGjDoXAsIEThu4tjaCBW4buNbmcgSOG6rXUsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1535977471310" width="730" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                  </div>
                  
                
                </div>
        </div>
            @include('layouts.lay2')

    </div>

</section>
<div class="clearfix"></div>

@endsection