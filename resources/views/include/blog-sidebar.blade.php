<aside class="col-lg-3 column">
    <div class="widget">
        <div class="search_widget_job no-margin">
            <div class="field_w_search">
                <input placeholder="Search Keywords" type="text">
                <i class="la la-search"></i>
            </div><!-- Search Widget -->
        </div>
    </div>
    <div class="widget">
        <h3>Categories</h3>
        <div class="sidebar-links">
            @php $categories = App\Category::orderBy('id', 'desc')->get(); @endphp
            @if($posts)
                @foreach($categories as $category)
                    <a href="#" title=""><i class="la la-angle-right"></i>{{ $category->name }}</a>
                @endforeach
            @endif
        </div>
    </div>
    <div class="widget">
        <h3>Recent Posts</h3>
        @php $posts = App\Post::orderBy('id', 'desc')->get(); $i = 0; @endphp
        <div class="post_widget">
            @if($posts)
                @foreach($posts as $post)
                 @php if($i == 4) break; @endphp
                <div class="mini-blog">
                    <span><a href="{{ route('post', $post->slug) }}" title=""><img src="{{ $post->photo ? asset('') . $post->photo->file : asset('images/default/feature.png') }}" alt=""></a></span>
                    <div class="mb-info">
                        <h3><a href="{{ route('post', $post->slug) }}" title="">{{ $post->title }}</a></h3>
                        <span>{{ $post->created_at->toFormattedDateString() }}</span>
                    </div>
                </div>
                @php $i++ @endphp
                @endforeach
            @endif
        </div>
    </div>
    <div class="widget">
        <h3>Archives</h3>
        <div class="sidebar-links">
            <a href="#" title=""><i class="la la-angle-right"></i>April 2017</a>
            <a href="#" title=""><i class="la la-angle-right"></i>March 2016</a>
            <a href="#" title=""><i class="la la-angle-right"></i>February 2015</a>
            <a href="#" title=""><i class="la la-angle-right"></i>July 2013</a>
        </div>
    </div>
    <div class="widget">
        <h3>Meta</h3>
        <div class="sidebar-links">
            <a href="#" title=""><i class="la la-angle-right"></i>Log in</a>
            <a href="#" title=""><i class="la la-angle-right"></i>Entries RSS</a>
            <a href="#" title=""><i class="la la-angle-right"></i>Comments RSS</a>
            <a href="#" title=""><i class="la la-angle-right"></i>WordPress.org</a>
        </div>
    </div>
    <div class="widget">
        <h3>Our Photo</h3>
        <div class="photo-widget">
            <div class="row">
                <div class="col-lg-4 col-md-2 col-sm-2 col-xs-6"> <a href="#" title=""><img src="images/resource/op1.jpg" alt=""></a> </div>
                <div class="col-lg-4 col-md-2 col-sm-2 col-xs-6"> <a href="#" title=""><img src="images/resource/op2.jpg" alt=""></a> </div>
                <div class="col-lg-4 col-md-2 col-sm-2 col-xs-6"> <a href="#" title=""><img src="images/resource/op3.jpg" alt=""></a> </div>
                <div class="col-lg-4 col-md-2 col-sm-2 col-xs-6"> <a href="#" title=""><img src="images/resource/op4.jpg" alt=""></a> </div>
                <div class="col-lg-4 col-md-2 col-sm-2 col-xs-6"> <a href="#" title=""><img src="images/resource/op5.jpg" alt=""></a> </div>
                <div class="col-lg-4 col-md-2 col-sm-2 col-xs-6"> <a href="#" title=""><img src="images/resource/op6.jpg" alt=""></a> </div>
            </div>
        </div>
    </div>
    <div class="widget">
        <h3>Tags</h3>
        <div class="tags_widget">
            <a href="#" title="">Adwords</a>
            <a href="#" title="">Sales</a>
            <a href="#" title="">Travel</a>
            <a href="#" title="">Our Blog</a>
            <a href="#" title="">Trade</a>
            <a href="#" title="">Traffic</a>
        </div>
    </div>
</aside>