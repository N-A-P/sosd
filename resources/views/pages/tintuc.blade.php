@extends('layouts.header')
@section('content')
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('.tab-menu').click(function () {
                $('#mymenu').toggle(50);
            });
            $(window).scroll(function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > 100) {
                    $('.menu-nav').addClass('is-show');
                } else {
                    $('.menu-nav').removeClass('is-show');
                }
            });

        });
    </script>
    <nav class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-text">
                <span><span><a href="index.html">Trang chủ</a> » <span class="breadcrumb_last">Tin tức</span></span></span>
            </div>
        </div>
    </nav>
<section class="clearfix">
    <div class="container">
        <div class="col-md-8 singlee">

            <h2 class="title">Tin tức</h2>
            <div class="entry-content"></div>

            @foreach ($data as $item)
            <div class="col-md-4 col-sm-6 col-xs-6">
            <a href="#"><img width="515" height="286" src="{{ asset($item->thumbnail) }}" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="#">{{ $item->tieude }}</a></h3>
                <p class="home_summary"> {{ $item->tieude }}</p>
                <div class="time-more">
                    <div class="time pull-left">27/09/18</div>
                <div class="pull-right"><a href="/tintuc/{{$item->id}}"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
                @endforeach


            {{-- <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="#"><img width="515" height="286" src="images/t1.jpg" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="#">Sinh viên và công việc “giúp việc gia đình”</a></h3>
                <p class="home_summary"> Hà Nội, nơi tập trung của rất nhiều trường đại học, vì thế các bạn sinh...</p>
                <div class="time-more">
                    <div class="time pull-left">27/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="#"><img width="515" height="286" src="images/t2.jpg" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="#">Kinh nghiệm giúp bé học giỏi ngoại ngữ</a></h3>
                <p class="home_summary"> Ngày nay, hầu hết các quốc gia trên thế giới chọn tiếng Anh là ngôn ngữ
                    giao...</p>
                <div class="time-more">
                    <div class="time pull-left">26/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="#"><img width="515" height="286" src="images/t3.png" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="#">Bộ ảnh cưới đẹp lung linh của Trường Giang – Nhã Phương</a></h3>
                <p class="home_summary"> Hình ảnh Nhã Phương xinh đẹp, kiều diễm bên chú rể Trường Giang hẳn sẽ...</p>
                <div class="time-more">
                    <div class="time pull-left">25/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="#"><img width="515" height="286" src="images/t4.png" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="#">Trị nám hiệu quả từ thiên nhiên</a></h3>
                <p class="home_summary"> Gương mặt xuất hiện những tàn nhang, là nỗi ám ảnh của các chị em phụ nữ....</p>
                <div class="time-more">
                    <div class="time pull-left">22/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="#"><img width="515" height="286" src="images/t5.png" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="#">Bí quyết phong thủy mang tài lộc vào nhà</a></h3>
                <p class="home_summary"> Treo một chiếc gương hoặc bố trí một đài phun nước ở khu vực tài lộc...</p>
                <div class="time-more">
                    <div class="time pull-left">21/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="#"><img width="515" height="286" src="images/t6.png" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="#">Một số bệnh thường gặp ở trẻ vào mùa thu, triệu chứng và cách phòng ngừa</a></h3>
                <p class="home_summary"> Cảm cúm ở trẻ Triệu chứng Sốt nhẹ Nghẹt mũi, chảy nước mũi Đau họng, ho,...</p>
                <div class="time-more">
                    <div class="time pull-left">20/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="#"><img width="515" height="286" src="images/t7.png" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="#">Cách làm món cá kho nghệ ngon như đầu bếp</a></h3>
                <p class="home_summary"> Cá kho nghệ là món ăn hết sức độc đáo, được ưa chuộng trong mỗi bữa ăn...</p>
                <div class="time-more">
                    <div class="time pull-left">19/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="#"><img width="515" height="286" src="images/t8.png" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="#">Ấm áp như vòng tay mẹ</a></h3>
                <p class="home_summary"> Trong xã hội hiện đại, phụ nữ ngày càng tham gia nhiều vào các công việc
                    kinh...</p>
                <div class="time-more">
                    <div class="time pull-left">18/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <a href="#"><img width="515" height="286" src="images/t9.png" class="attachment-thumb_nail_crop size-thumb_nail_crop wp-post-image"
                        alt="" /></a>
                <h3 class="title"><a href="#">Cách đo lòng người</a></h3>
                <p class="home_summary"> “Dò sông dò bể dễ dò, nào ai lấy thước để đo lòng người”. Nhưng hãy...</p>
                <div class="time-more">
                    <div class="time pull-left">17/09/18</div>
                    <div class="pull-right"><a href="#"><span>Xem chi tiết</span></a></div>
                </div>
            </div> --}}


            <div class="pagination">
                <span aria-current='page' class='page-numbers current'>1</span>
                <!-- https://giupvieccici.vn/category/tin-tuc//page/2 -->
                <!-- https://giupvieccici.vn/category/tin-tuc//page/3 -->
                <a class='page-numbers' href='#'>2</a>
                <a class='page-numbers' href='#'>3</a>
                <a class="next page-numbers" href="#">Trang sau &raquo;</a> </div>
        </div>
        @include('layouts.lay2')

    </div>

</section>
@endsection