<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <title>Giúp việc gia đình - Công ty TNHH Dịch vụ HTP</title>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <base href="{{asset('')}}">
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
    <script src="{{asset('js/custom.js')}}"></script>
    <link rel="icon" href="{{ asset('images/logoHTP.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('images/logoHTP.png') }}" type="image/x-icon" />
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css' href='{{ asset('css/style.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='wordpress-popular-posts-css-css' href='{{ asset('css/wpp.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-style-css' href='{{ asset('css/bootstrap.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-style-css' href='{{ asset('assets/owl.carousel.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='main-style-css' href="css/style_main.css" type='text/css' media='all' />
    <link rel='stylesheet' id='fontawesome-min-css'  href='{{ asset('css/font-awesome.min.css') }}' type='text/css' media='all' />
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"> --}}

    
    <script type='text/javascript' src='{{asset('js/jquery-migrate1.4.1.min.js')}}'></script>
    {{-- <script type='text/javascript'>
        /* <![CDATA[ */
        var wpp_params = { "sampling_active": "0", "sampling_rate": "100", "ajax_url": "https:\/\/giupvieccici.vn\/wp-json\/wordpress-popular-posts\/v1\/popular-posts\/", "action": "update_views_ajax", "ID": "1182", "token": "bbc7e5de42", "debug": "" };
    /* ]]> */
    </script> --}}
    <script type='text/javascript' src='{{asset('js/wpp-4.1.0v412.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/bootstrap.min.js')}}'></script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>
<body>
<header>
    <div class="top-bar">
        <div class="container">
            <div class="left-bar hidden-md"><span class="x-phone"><i class="fa fa-phone" style="margin-right: 2px"></i>0359571956</span></div>
            <div class="left-bar hidden-xs hidden-sm">
                <span><i class="fa fa-map-marker"></i> 298, Cầu Diễn, Quận Bắc Từ Liêm, Hà Nội.</span>
            </div>
            <div class="right-bar text-right">
                <span class="social">
                  <a target="_blank" href="https://www.facebook.com/laravel"> <img src="{{asset('images/facebook.png')}}"></a>
                  <a target="_blank" href="https://www.twitter.com"><img src="{{asset('images/twitter.png')}}"></a>
                  <a target="_blank" href="https://www.mail.google.com"><img src="{{asset('images/ggplus.png')}}"></a>

                </span>
            </div>
        </div>
    </div>
    <div id="nav" class="menu-nav clearfix">
        <div class="container">
            <div class="col-md-3 col-sm-3 col-xs-10">
                <div class="logo">
                    <a href="/" title="Công ty TNHH Dịch vụ HTP"><img src="{{ asset('images/logoHTP.png') }}"></a>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-2 toggle">
                <div class="menu" id="menu">
                    <nav class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle tab-menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse" id="mymenu">
                            <span class="tab-menu clearfix"><i class="fa fa-times"></i></span>
                            <div class="menu-menu-main-container">
                                <ul id="menu-menu-main" class="nav navbar-nav">
                                    <li id="menu-item-73" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-73"><a
                                            href="/">TRANG CHỦ</a></li>
                                    <li id="menu-item-220" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-220"><a
                                    href="{{route('pages.about')}}">Giới Thiệu</a></li>
                                    <li id="menu-item-373" class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-ancestor current-menu-parent menu-item-has-children menu-item-373"><a
                                            href="{{route('pages.dichvu')}}">Dịch vụ</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-1184" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1182 current_page_item menu-item-1184"><a
                                                    href="{{route('pages.giupviec')}}">GIÚP VIỆC GIA ĐÌNH</a></li>
                                            <li id="menu-item-1187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1187"><a
                                                    href="Dv_nguoi-gia.html">GIÚP VIỆC CHĂM NGƯỜI GIÀ</a></li>
                                            <li id="menu-item-1186" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1186"><a
                                                    href="Dv_trongtre.html">GIÚP VIỆC CHĂM BÉ</a></li>
                                            <li id="menu-item-1188" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1188"><a
                                                    href="Dv_giupviectheogio.html">GIÚP VIỆC THEO GIỜ</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-621" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-621"><a
                                            href="{{route('pages.nhanvien')}}">Nhân viên</a></li>
                                    <li id="menu-item-374" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-374"><a
                                            href="tintuc">Tin tức</a></li>
                                    <!-- <li id="menu-item-375" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-375"><a href="tuyen_dung.html">Tuyển dụng</a></li> -->
                                    <li id="menu-item-221" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-221"><a
                                            href="{{route('pages.lienhe')}}">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


@yield('content')


<div class="clearfix"></div>
<link href="css/phone.css" rel="stylesheet" type="text/css" />
<div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon" style="right: -40px; bottom: 40px; display: block;position: fixed;z-index: 999">
    <div class="phonering-alo-ph-circle"></div>
    <div class="phonering-alo-ph-circle-fill"></div>
    <a href="tel:+"></a>
    <div class="phonering-alo-ph-img-circle">

        <a href="tel:0778833754" class="pps-btn-img " title="Liên hệ">
            <img src="{{asset('images/img.png')}}"
             alt="Liên hệ" width="50" onmouseover="this.src = '{{asset('images/img.png')}}';"
              onmouseout="this.src = '{{asset('images/img.png')}}';">
        </a>
    </div>
</div>
<script type='text/javascript' src='{{asset('js/scripts504.js')}}'></script>
<script type='text/javascript' src='{{asset('js/wp-embed498.min.js')}}'></script>
<footer>
    <div class="container">
        <div class="row footer-content">
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                <div class="footer-img">
                    <a href="/"><img src="{{ asset('images/logoHTP.png') }}"></a>
                    <!-- images/logo-CiCi-2.png -->
                </div>
                <p class="thep"><strong>Công ty TNHH Dịch vụ HTP</strong> là một trong những công ty chuyên cung cấp
                    người lao động chuyên <strong>giúp việc gia đình</strong>, tạp vụ văn phòng, lao động phổ thông
                    hàng đầu hiện nay. Với đội ngũ lãnh đạo và nhân viên trẻ, năng động, chuyên nghiệp, được đào tạo
                    bài bản, không ngừng nâng cao nghiệp vụ, chúng tôi cam kết mang lại cho khách hàng sự hài lòng cao
                    nhất.</p>
            </div>
            <div class="col-md-4 col-sm-6  wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                <h3 class="title wow fadeInUp">Liên Hệ</h3>
                <p><i class="fa fa-map-marker"></i> Địa chỉ: 298, Cầu Diễn, Quận Bắc Từ Liêm, Hà Nội..</p>
                <p><i class="fa fa-phone"></i> 0359571956</p>
                <p><i class="fa fa-google-plus-circle"></i> Email: giupviechtp@gmail.com</p>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                <h3 class="title">Fanpage</h3>
                <div class="fb-page" data-href="https://www.facebook.com/giupviechtp"
                data-tabs="timeline" data-height="70" data-small-header="false" 
                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/giupviechtp" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/giupviechtp">
                Giúp Việc HTP</a></blockquote></div>
            </div>
        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>© Copyright nhóm 14 Nguyễn Anh Phương Nguyễn Doãn Hoài Thu Nguyễn Chí Tuấn</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/wow.min.js"></script>
 <script>
  new WOW().init();
</script> 
<a class="back-to-top"><i class="fa fa-angle-up"></i></a>
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
<script>
        window.fbAsyncInit = function() {
          FB.init({
            appId            : '2085693314823362',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.12'
          });
        };
      
        (function(d, s, id){
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement(s); js.id = id;
           js.src = "https://connect.facebook.net/en_US/sdk.js";
           fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
      
      <div class="fb-customerchat" page_id="2435131103170924"></div>
          
</body>

</html>