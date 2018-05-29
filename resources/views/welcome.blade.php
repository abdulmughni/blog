@extends('layouts.front-layout')

@section('title-and-meta')
    <title>Home | Job Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Job Portal">
@endsection

@section('content-sections')
    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-featured-sec">
                            <ul class="main-slider-sec text-arrows slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>
                                <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 9515px; transform: translate3d(-1903px, 0px, 0px);" role="listbox"><li class="slideHome slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 1903px;" tabindex="-1"><img src="images/mslider1.jpg" alt=""></li><li class="slideHome slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 1903px;" tabindex="-1" role="option" aria-describedby="slick-slide10"><img src="images/mslider3.jpg" alt=""></li><li class="slideHome slick-slide" data-slick-index="1" aria-hidden="true" style="width: 1903px;" tabindex="-1" role="option" aria-describedby="slick-slide11"><img src="images/mslider2.jpg" alt=""></li><li class="slideHome slick-slide" data-slick-index="2" aria-hidden="true" style="width: 1903px;" tabindex="-1" role="option" aria-describedby="slick-slide12"><img src="images/mslider1.jpg" alt=""></li><li class="slideHome slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" style="width: 1903px;" tabindex="-1"><img src="images/mslider3.jpg" alt=""></li></div></div>


                                <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button></ul>
                            <div class="job-search-sec">
                                <div class="job-search">
                                    <h3>The Easiest Way to Get Your New Job</h3>
                                    <span>Find Jobs, Employment &amp; Career Opportunities</span>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <input type="text" placeholder="Job title, keywords or company name">
                                                    <i class="la la-keyboard-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <select data-placeholder="City, province or region" class="chosen-city" style="display: none;">
                                                        <option>Istanbul</option>
                                                        <option>New York</option>
                                                        <option>London</option>
                                                        <option>Russia</option>
                                                    </select><div class="chosen-container chosen-container-single chosen-container-single-nosearch" title="" style="width: 81px;"><a class="chosen-single">
                                                            <span>Istanbul</span>
                                                            <div><b></b></div>
                                                        </a>
                                                        <div class="chosen-drop">
                                                            <div class="chosen-search">
                                                                <input class="chosen-search-input" type="text" autocomplete="off" readonly="">
                                                            </div>
                                                            <ul class="chosen-results"></ul>
                                                        </div></div>
                                                    <i class="la la-map-marker"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                                                <button type="submit"><i class="la la-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="or-browser">
                                        <span>Browse job offers by</span>
                                        <a href="#" title="">Category</a>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-to">
                                <a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="scroll-here">
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Popular Categories</h2>
                            <span>37 jobs live - 0 added today.</span>
                        </div><!-- Heading -->
                        <div class="cat-sec">
                            <div class="row no-gape">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-bullhorn"></i>
                                            <span>Design, Art &amp; Multimedia</span>
                                            <p>(22 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-graduation-cap"></i>
                                            <span>Education Training</span>
                                            <p>(6 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-line-chart "></i>
                                            <span>Accounting / Finance</span>
                                            <p>(3 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-users"></i>
                                            <span>Human Resource</span>
                                            <p>(3 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cat-sec">
                            <div class="row no-gape">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-phone"></i>
                                            <span>Telecommunications</span>
                                            <p>(22 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-cutlery"></i>
                                            <span>Restaurant / Food Service</span>
                                            <p>(6 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-building"></i>
                                            <span>Construction / Facilities</span>
                                            <p>(3 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-user-md"></i>
                                            <span>Health</span>
                                            <p>(3 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="browse-all-cat">
                            <a href="#" title="">Browse All Categories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block double-gap-top double-gap-bottom">
            <div data-velocity="-.1" style="background: url(&quot;images/resource/parallax1.jpg&quot;) 50% 0px repeat scroll transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text-block">
                            <h3>Make a Difference with Your Online Resume!</h3>
                            <span>Your resume in minutes with JobHunt resume assistant is ready!</span>
                            <a href="#" title="">Create an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Featured Jobs</h2>
                            <span>Leading Employers already using job and talent.</span>
                        </div><!-- Heading -->
                        <div class="job-listings-sec">
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/l1.png" alt=""> </div>
                                    <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                    <span>Massimo Artemisis</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is ft">FULL TIME</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/l2.png" alt=""> </div>
                                    <h3><a href="#" title="">Marketing Director</a></h3>
                                    <span>Tix Dog</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Rennes, France</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is pt">PART TIME</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/l3.png" alt=""> </div>
                                    <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                    <span>StarHealth</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>London, United Kingdom</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is ft">FULL TIME</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/l4.png" alt=""> </div>
                                    <h3><a href="#" title="">Application Developer For Android</a></h3>
                                    <span>Altes Bank</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Istanbul, Turkey</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is fl">FREELANCE</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/l5.png" alt=""> </div>
                                    <h3><a href="#" title="">Regional Sales Manager South east Asia</a></h3>
                                    <span>Vincent</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Ajax, Ontario</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is tp">TEMPORARY</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="images/l6.png" alt=""> </div>
                                    <h3><a href="#" title="">Social Media and Public Relation Executive </a></h3>
                                    <span>MediaLab</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Ankara / Turkey</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is ft">FULL TIME</span>
                            </div><!-- Job -->
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="browse-all-cat">
                            <a href="#" title="">Load more listings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div data-velocity="-.1" style="background: url(&quot;images/resource/parallax2.jpg&quot;) 50% 0px repeat scroll transparent;" class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading light">
                            <h2>Kind Words From Happy Candidates</h2>
                            <span>What other people thought about the service provided by JobHunt</span>
                        </div><!-- Heading -->
                        <div class="reviews-sec slick-initialized slick-slider slick-dotted" id="reviews-carousel" role="toolbar">
                            <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4680px; transform: translate3d(-1170px, 0px, 0px);" role="listbox"><div class="col-lg-6 slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 585px;" tabindex="-1">
                                        <div class="reviews">
                                            <img src="images/r1.jpg" alt="">
                                            <h3>Augusta Silva <span>Web designer</span></h3>
                                            <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                        </div><!-- Reviews -->
                                    </div><div class="col-lg-6 slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 585px;" tabindex="-1">
                                        <div class="reviews">
                                            <img src="images/r2.jpg" alt="">
                                            <h3>Ali Tufan <span>Web designer</span></h3>
                                            <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                        </div><!-- Reviews -->
                                    </div><div class="col-lg-6 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 585px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
                                        <div class="reviews">
                                            <img src="images/r1.jpg" alt="">
                                            <h3>Augusta Silva <span>Web designer</span></h3>
                                            <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                        </div><!-- Reviews -->
                                    </div><div class="col-lg-6 slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 585px;" tabindex="-1" role="option" aria-describedby="slick-slide01">
                                        <div class="reviews">
                                            <img src="images/r2.jpg" alt="">
                                            <h3>Ali Tufan <span>Web designer</span></h3>
                                            <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                        </div><!-- Reviews -->
                                    </div><div class="col-lg-6 slick-slide" data-slick-index="2" aria-hidden="true" style="width: 585px;" tabindex="-1" role="option" aria-describedby="slick-slide02">
                                        <div class="reviews">
                                            <img src="images/r1.jpg" alt="">
                                            <h3>Augusta Silva <span>Web designer</span></h3>
                                            <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                        </div><!-- Reviews -->
                                    </div><div class="col-lg-6 slick-slide" data-slick-index="3" aria-hidden="true" style="width: 585px;" tabindex="-1" role="option" aria-describedby="slick-slide03">
                                        <div class="reviews">
                                            <img src="images/r2.jpg" alt="">
                                            <h3>Ali Tufan <span>Web designer</span></h3>
                                            <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                        </div><!-- Reviews -->
                                    </div><div class="col-lg-6 slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" style="width: 585px;" tabindex="-1">
                                        <div class="reviews">
                                            <img src="images/r1.jpg" alt="">
                                            <h3>Augusta Silva <span>Web designer</span></h3>
                                            <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                        </div><!-- Reviews -->
                                    </div><div class="col-lg-6 slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 585px;" tabindex="-1">
                                        <div class="reviews">
                                            <img src="images/r2.jpg" alt="">
                                            <h3>Ali Tufan <span>Web designer</span></h3>
                                            <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                        </div><!-- Reviews -->
                                    </div></div></div>



                            <ul class="slick-dots" style="display: block;" role="tablist"><li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00"><button type="button" data-role="none" role="button" tabindex="0">1</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01" class=""><button type="button" data-role="none" role="button" tabindex="0">2</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation02" id="slick-slide02" class=""><button type="button" data-role="none" role="button" tabindex="0">3</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation03" id="slick-slide03" class=""><button type="button" data-role="none" role="button" tabindex="0">4</button></li></ul></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Companies We've Helped</h2>
                            <span>Some of the companies we've helped recruit excellent applicants over the years.</span>
                        </div><!-- Heading -->
                        <div class="comp-sec">
                            <div class="company-img">
                                <a href="#" title=""><img src="images/cc1.jpg" alt=""></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="images/cc2.jpg" alt=""></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="images/cc3.jpg" alt=""></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="images/cc4.jpg" alt=""></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="images/cc5.jpg" alt=""></a>
                            </div><!-- Client  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div data-velocity="-.1" style="background: url(&quot;images/resource/parallax3.jpg&quot;) 50% 0px repeat scroll transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Quick Career Tips</h2>
                            <span>Found by employers communicate directly with hiring managers and recruiters.</span>
                        </div><!-- Heading -->
                        <div class="blog-sec">
                            <div class="row">
                                @if($posts)
                                    @foreach($posts as $post)
                                        @php if($i == 3) break @endphp
                                        <div class="col-lg-4">
                                            <div class="my-blog">
                                                <div class="blog-thumb">
                                                    <a href="{{ route('post', $post->slug) }}" title=""><img src="{{ $post->photo ? asset('') . $post->photo->file : asset('images/default/feature.png') }}" alt=""></a>
                                                    <div class="blog-metas">
                                                        <a href="#" title="">{{ $post->created_at->toFormattedDateString() }}</a>
                                                        <a href="#" title="">{{ $post->comment->count() }} Comments</a>
                                                    </div>
                                                </div>
                                                <div class="blog-details">
                                                    <h3><a href="{{ route('post', $post->slug) }}" title="">{{ $post->title }}</a></h3>
                                                    <p>{!! substr($post->description, 0, 150) !!}</p>
                                                    <a href="{{ route('post', $post->slug) }}" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        @php $i++ @endphp
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text">
                            <h3>Gat a question?</h3>
                            <span>We're here to help. Check out our FAQs, send us an email or call us at 1 (800) 555-5555</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        $(document).ready(function(){
            $("#candidate").click(function(){
                $("#user_role_id").attr("value", "<?php echo $candidate->name; ?>");
            });

            $("#employer").click(function(){
                $("#user_role_id").attr("value", "<?php echo $employer->name; ?>");
            });
        });
    </script>
@endsection