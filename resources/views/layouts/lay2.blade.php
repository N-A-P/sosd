<div class="col-md-3" style="">
    <aside>
        <h4 class="entry-title">FACEBOOK</h4>
        <!--Facebook page-->
        <div class="fb-page" data-href="https://www.facebook.com/giupviechtp" 
        data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" 
        data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/giupviechtp" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/giupviechtp">Giúp Việc HTP</a></blockquote></div>

    </aside>
    <aside>
        <h4 class="entry-title">LIÊN HỆ</h4>
        <div class="contact">
            <img src="{{ asset('images/hotline1.jpg') }}" alt="anh" class="img-responsive">
        </div>
    </aside>
    <aside>
        <img src="">
    </aside>
    <aside>
        <img src="">
    </aside>
    <aside>

        <aside id="wpp-4" class="widget popular-posts">
            <div class="widget-panel">
                <h4 class="entry-title"><span>Tin tức mới nhất<span></h4>
            </div>
            <!-- WordPress Popular Posts -->

            <ul class="wpp-list wpp-list-with-thumbnails">
                @foreach ($news as $n)
                <li>
                <a href="/tintuc/{{$n->id}}" title="{{$n->tieude}}"
                target="_self"><img src="{{ asset('storage/images/'.$n->thumbnail) }}"
                                style="width:75px; height: 75px;" alt="{{$n->tieude}}" class="wpp-thumbnail wpp_cached_thumb wpp_featured" /></a>
                        <a href="/tintuc/{{$n->id}}" title="{{$n->tieude}}"
                            class="wpp-post-title" target="_self">{{$n->tieude}}</a>
                        <span class="wpp-meta post-stats"><span class="wpp-views">{{$n->luotxem}} views</span></span>
                    </li>
                @endforeach
            </ul>
        </aside>
    </aside>
</div>
