@extends('layouts.header')

@section('content')
<div width="90%">
	<img src="images/GiupviecIndex.jpg" width="100%" alt="...">
	</div>
	<section>
<div class="home-greeting">
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-6 wow fadeInLeft home-content" data-wow-delay="0s" data-wow-duration="2s">
			<h1 class="line-style">Công ty TNHH Dịch vụ HTP</h1>
			<p align="left"><strong>Công ty TNHH Dịch vụ HTP</strong> là một trong những công ty chuyên cung cấp người lao động chuyên giúp việc gia đình, tạp vụ văn phòng, lao động phổ thông hàng đầu hiện nay. Với đội ngũ lãnh đạo và nhân viên trẻ, năng động, chuyên nghiệp, được đào tạo bài bản, không ngừng nâng cao nghiệp vụ, chúng tôi cam kết mang lại cho khách hàng sự hài lòng cao nhất.</p>
<p align="left">Mục tiêu hàng đầu của công ty hiện nay đó chính là xây dựng một đội ngũ người giúp việc có chuyên môn, trách nhiệm và  thực sự yêu nghề. Qua đó,  đưa giúp việc gia đình trở thành một ngành nghề cần được tôn trọng trong xã hội và người lao động được trả công xứng đáng với sức lao động của mình.</p>				</div>
		<div class="col-sm-12 col-md-6 wow fadeInRight" data-wow-delay="0s" data-wow-duration="1.5s">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/wZZ7oFKsKzY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
</div>
</div>
<div class="thanhtuu">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6 wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1.5s">
				<div class="header">
					<h2>Vì sao chọn HTP</h2>
				</div>
				<div class="thanhtuu-list">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s">
						<img src="images/express-01.png" alt="HTP">
						<p>Nhanh chóng tiện lợi</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1.5s">
						<img src="images/like-01.png" alt="HTP">
						<p>Dịch vụ chất lượng</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 wow fadeInLeft" data-wow-delay="1.5s" data-wow-duration="1.5s">
						<img src="images/no1-01.png" alt="HTP">
						<p>Dịch vụ tận tâm</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 wow fadeInLeft" data-wow-delay="2s" data-wow-duration="1.5s">
						<img src="images/money-01.png" alt="HTP">
						<p>Tiết kiệm chi phí</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 wow fadeInRight" data-wow-delay="0s" data-wow-duration="2s">
				<div class="header">
					<h2>Đặt lịch ngày giờ giúp việc</h2>
				</div>
				<div class="form-lh">
					<div role="form" class="wpcf7" id="wpcf7-f429-o1" lang="vi" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/as" method="post" class="wpcf7-form" novalidate="novalidate">
    {{csrf_field()}}
<p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ và tên" /></span><br />
<span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" /></span><br />
<span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Địa chỉ Email" /></span><br />
<span class="wpcf7-form-control-wrap date-82"><input type="date" name="date" value="Đặt ngày giờ" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" /></span><br />
<span class="wpcf7-form-control-wrap address"><textarea name="noidung" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Nhập địa chỉ và yêu cầu của bạn"></textarea></span></p>
<p><input type="submit" value="GỬI ĐĂNG KÍ" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form> </div> </div>
			</div>
		</div>
	</div>
</div>
<div class="introduct box-matbang">
	<div class="container">
		<div class="header"><h2>Nhân viên giúp việc</h2></div>
		<div class="row">
			@foreach ($maids as $m)
				
			
			<div class="col-md-3 col-sm-6 col-xs-6 block-item">
				<div class="box-hover wow zoomIn" data-wow-delay="0s" data-wow-duration="1.5s">
					<div class="intro-img">
						<img width="5136" height="3104" src="{{ asset( 'storage/images/'.$m->anh)}}" class="attachment-mai-thumbnails size-mai-thumbnails wp-post-image" alt="" srcset=" {{ asset( 'storage/images/'.$m->anh)}} 5136w, images/1.jpg 300w, {{ asset( 'storage/images/'.$m->anh)}} 768w, images/1.jpg 1024w" sizes="(max-width: 5136px) 100vw, 5136px" /></div>
					<div class="infor">
						<div class="model">
						<h3 class="name-model">{{$m->ten}}</h3>
							<p>Sinh năm: {{$m->namsinh}}</p>
							<p>Địa chỉ : {{$m->quequan}}</p>
							<p>Kinh nghiệm :{{$m->kinhnghiem_tomtat}} </p>
						<a href="{{route('pages.chitietnhanvien',$m->id)}}"><span>Xem chi tiết</span></a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
								
		</div>
		
			<!-- Print a link to this category -->
			<a href="/nhanvien" title="Category Name" class="btn read-more">Xem thêm</a>

	</div>
</div>
<div class="post row box-matbang">
	<div class="container">
		<div class="content clearfix">
			<div class="header"><h2>Tin tức nổi bật</h2></div>
			<div class="clearfix"></div>
								@foreach($news as $i)								
								<div class="col-md-4 col-sm-6 frame_left item">
									<div class="nd-all wow fadeInLeft"  data-wow-delay="0.5s" data-wow-duration="2500ms">
									<a href="#" title="{{$i->tieude}}" class="thumb"><img width="515" height="286" src="{{asset('storage/images/'.$i->thumbnail)}}" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image" alt="" /></a>
										<div class="effect">
										<h3 class="title"><a href="/tintuc/{{$i->id}}" title="{{$i->tieude}}">{{$i->tieude}}</a></h3>
										</div>
									</div>
								</div>
								@endforeach
			
												</div>
										</div>
								</div>
								<div class="clearfix"></div>


								<div class="row box-matbang">
									<div class="container">
										<div class="header"><h2>Khách hàng nói gì về chúng tôi</h2></div>

										<div class="large-12 columns">
											<div class="owl-carousel owl-theme owl-kh text-center">
																											<div class="item">
														<img class="wow slideInDown" data-wow-delay="0s"  data-wow-duration="2500ms" src="images/HC.jpg">
														<h4 class="title wow fadeInUp"  data-wow-delay="0.5s" data-wow-duration="2500ms">Nguyễn Ích Vinh</h4>
														<p class="home_summary wow fadeInUp" data-wow-delay="1s" data-wow-duration="2500ms">Hồi vợ mình sinh, mình có thuê người giúp việc trông trẻ tại HTP. Cô rất chăm chỉ, lại chiu khó. Nhờ có cô mà vợ chồng mình đỡ vất vả. Vợ mình cũng vui vẻ nên mình rất yên tâm. Cảm ơn HTP</p>
													</div>
																												<div class="item">
														<img class="wow slideInDown" data-wow-delay="0s"  data-wow-duration="2500ms" src="images/khách-hàng-sau-khi-bọc-răng-sứ-thẩm-mỹ.jpg">
														<h4 class="title wow fadeInUp"  data-wow-delay="0.5s" data-wow-duration="2500ms">Nguyễn Phương Linh</h4>
														<p class="home_summary wow fadeInUp" data-wow-delay="1s" data-wow-duration="2500ms">Mình từng thuê người giúp việc tại giúp việc HTP thấy rất hài lòng về dịch vụ và chất lượng người giúp việc. Sẽ tiếp tục ủng hộ và giới thiệu cho bạn bè sử dụng.</p>
													</div>
																												<div class="item">
														<img class="wow slideInDown" data-wow-delay="0s"  data-wow-duration="2500ms" src="images/image-0.jpg">
														<h4 class="title wow fadeInUp"  data-wow-delay="0.5s" data-wow-duration="2500ms">Nguyễn Trung Hiếu</h4>
														<p class="home_summary wow fadeInUp" data-wow-delay="1s" data-wow-duration="2500ms">Hiện tại nhà mình đang thuê 2 cô ở đây: một cô ở Phú Thọ, 1 cô ở Hưng Yên. Vì nhà mình ngoài làm việc nhà cần người phụ bán quán nên cần thuê 2 người. Nói chung các cô được đào tạo khá tốt, hiền lành, nên cũng thấy yên tâm.</p>
													</div>
																											</div>
											</div>
										</div>
									</div>
								</section>
								<script>
									$(document).ready(function() {
									  $('.owl-kh').owlCarousel({
										loop: true,
										margin: 10,
										responsiveClass: true,
										responsive: {
										  0: {
											items: 1,
											nav: true
										  },
										  600: {
											items: 3,
											nav: false
										  },
										  1000: {
											items: 3,
											nav: true,
											loop: false,
											margin: 20
										  }
										}
									  })
									  $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
														$( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
								  
									})
								  </script>
@endsection

