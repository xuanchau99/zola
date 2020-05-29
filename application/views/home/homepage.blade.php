@extends('layouts.master')
@section('title',"Home Page")
@include('layouts.header')
@section('homepage')
<div class="container">
    <div class="row">
        <!-- SLIDER -->
            <div class="slider col-lg-12 col-xs-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slider-img col-lg-4 col-xs-12">
                            <a href="https://zingnews.vn/" target="_blank">
                                <div class="slider-hover">
                                    <img src="{{asset('images/austin-mahone.jpg')}}" alt="Austin Mahone">
                                    <div class="slider-footer">
                                        <div class="box-profile">
                                            <img src="{{asset('images/avatar.jpg')}}" alt="Popular Avatar">
                                            <span class="name-slider-footer">Lily Clover</span>
                                            <div class="text-slider-footer">
                                                The photo Session in which the model Participated
                                                <div class="slider-hover-profile">
                                                    <i class="glyphicon glyphicon-heart"></i>
                                                    173 likes
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                            </a>
                            <button  class="btn-slider">Life</button>
                        </div>

                        <div class="swiper-slide slider-img col-lg-4 col-xs-12">
                            <a href="https://zingnews.vn/" target="_blank">
                                <div class="slider-hover">
                                    <img src="{{asset('images/lost-frequencies.jpg')}}" alt="Lost Frequencies"> 
                                    <div class="slider-footer">
                                        <div class="box-profile">
                                            <img src="{{asset('images/avatar.jpg')}}" alt="Popular Avatar">
                                            <span class="name-slider-footer">Lily Clover</span>
                                            <div class="text-slider-footer">
                                                More and more Entrepreneurs invest in the New
                                                <div class="slider-hover-profile">
                                                        <i class="glyphicon glyphicon-heart"></i>
                                                        125 likes
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <button type="button" class="btn-slider">Travel</button>
                        </div>

                        <div class="swiper-slide slider-img col-lg-4 col-xs-12">
                            <a href="https://zingnews.vn/" target="_blank">
                                <div class="slider-hover">
                                    <img src="{{asset('images/phys-ed.jpg')}}" alt="Phys Ed">
                                    <div class="slider-footer">
                                        <div class="box-profile">
                                            <img src="{{asset('images/avatar.jpg')}}" alt="Popular Avatar">
                                            <span class="name-slider-footer">Lily Clover</span>
                                            <div class="text-slider-footer">
                                                The Biggest fans of sport are Women
                                                <div class="slider-hover-profile">
                                                        <i class="glyphicon glyphicon-heart"></i>
                                                        275 likes
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <button type="button" class="btn-slider">Arst</button>
                        </div>

                        <div class="swiper-slide slider-img col-lg-4 col-xs-12">
                            <a href="https://zingnews.vn/" target="_blank">
                                <div class="slider-hover">
                                    <img src="{{asset('images/volleyball-women.jpg')}}" alt="Volleyball Women"> 
                                    <div class="slider-footer">
                                        <div class="box-profile">
                                            <img src="{{asset('images/avatar.jpg')}}" alt="Popular Avatar">
                                            <span class="name-slider-footer">Lily Clover</span>
                                            <div class="text-slider-footer">
                                                The Biggest fans of sport are Women
                                                <div class="slider-hover-profile">
                                                        <i class="glyphicon glyphicon-heart"></i>
                                                        275 likes
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </a>
                            <button type="button" class="btn-slider">Travel</button>
                        </div>

                        <div class="swiper-slide slider-img col-lg-4 col-xs-12">
                            <a href="https://zingnews.vn/" target="_blank">
                                <div class="slider-hover">
                                    <img src="{{asset('images/slider4.jpg')}}" alt="Slider 4"> 
                                    <div class="slider-footer">
                                        <div class="box-profile">
                                            <img src="{{asset('images/avatar.jpg')}}" alt="Popular Avatar">
                                            <span class="name-slider-footer">Lily Clover</span>
                                            <div class="text-slider-footer">
                                                The Biggest fans of sport are Women
                                                <div class="slider-hover-profile">
                                                        <i class="glyphicon glyphicon-heart"></i>
                                                        275 likes
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>  
                            </a>
                            <button type="button" class="btn-slider">Life</button>
                        </div>

                        <div class="swiper-slide slider-img col-lg-4 col-xs-12">
                            <a href="https://zingnews.vn/" target="_blank">
                                <div class="slider-hover">
                                    <img src="{{asset('images/slider5.jpg')}}" alt="Slider 5"> 
                                    <div class="slider-footer">
                                        <div class="box-profile">
                                            <img src="{{asset('images/avatar.jpg')}}" alt="Popular Avatar">
                                            <span class="name-slider-footer">Lily Clover</span>
                                            <div class="text-slider-footer">
                                                The Biggest fans of sport are Women
                                                <div class="slider-hover-profile">
                                                        <i class="glyphicon glyphicon-heart"></i>
                                                        275 likes
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </a>
                            <button type="button" class="btn-slider">Arst</button>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        <!-- MOST POPULAR -->
            <div class="most-popular">
                <div>
                    <b>MOST POPULAR</b>
                </div>
                <div class="line-popular col-lg-12">
                    <div class="line-popular-bg">
                        <div id="line-color"></div>
                    </div>
                </div>
                <div class="row">
                @foreach($listPopular as $key => $item)
                    <div class="popular-box col-lg-4 col-xs-12 <?= ($key==0)?"first":"" ?>">
                        <div class="div-box">
                            <div class="div-img">
                                <a href="{{site_url('post-detail/'.$item->slug)}}"><img src="{{asset($item->image)}}" alt="The attention Systems"></a>
                                <button type="button" class="btn-popular {{$item->category_name}} @if($item->category_id ==4)Life-arts@endif">{{$item->category_name}}</button>
                            </div>
                            <div class="div-text">
                                <div class="line-color-text"></div>
                                <a href="{{site_url('post-detail/'.$item->slug)}}" class="text-title">{{$item->title}}</a>
                                <p class="text-content">{{$item->summary}}</p>
                            </div>
                            <div class="popular-profile">
                                <div class="box-profile">
                                    <img src="{{asset($item->avatar)}}" alt="Avatar {{$item->user_name}}">
                                    <span class="text-profile">{{$item->user_name}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>

        <!-- MOST CATEGORY -->
            <div class="most-category col-lg-12 col-xs-12">
                <div class="most-technology col-lg-8 col-xs-12">
                    <div class="div-category col-lg-12 col-xs-12">
                        <div class="row">
                            <div class="category-box category-box-first col-lg-6 col-xs-12">
                                <div>
                                    <b>TECHNOLOGY</b>
                                </div>
                                <div class="line-category">
                                    <div id="line-color-tech"></div>
                                </div>
                                <div class="div-box">
                                    @foreach($listTechnology as $item)
                                        <div class="div-img-tech">
                                            <a href="{{site_url('post-detail/'.$item->slug)}}"><img src="{{asset($item->image)}}" alt="Image Technology"></a>
                                            <button type="button" class="btn-more-category {{$item->category_name}} @if($item->category_id ==4)Life-arts@endif">{{$item->category_name}}</button>
                                            <div class="category-profile">
                                                <div class="box-profile">
                                                    <img src="{{asset($item->avatar)}}" alt="Avatar {{$item->user_name}}">
                                                    <span class="text-profile">{{$item->user_name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="div-text">
                                            <div class="line-text-cate">5 MIN READ</div>
                                            <a href="{{site_url('post-detail/'.$item->slug)}}" class="text-title">{{$item->title}}</a>
                                            <p class="text-content">{{$item->summary}}</p>
                                        </div>
                                    @endforeach
                                    <div class="more-related">
                                        @foreach($MoreTechnology as $key => $item)
                                            <div class="box-related">
                                                <div class="related-top <?=($key==1)?"related-center":"" ?>">
                                                    <a href="{{site_url('post-detail/'.$item->slug)}}"><img src="{{asset($item->image)}}" alt="Image Related 4"></a>
                                                    <a href="{{site_url('post-detail/'.$item->slug)}}" class="text-related">{{$item->title}}</a>
                                                    <p class="min-related">5 MIN READ</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="category-box col-lg-6 col-xs-12">
                                <div>
                                    <b>TRAVEL</b>
                                </div>
                                <div class="line-category">
                                    <div id="line-color-travel"></div>
                                </div>
                                <div class="div-box">
                                    @foreach($listTravel as $item)
                                        <div class="div-img-tech">
                                            <a href="{{site_url('post-detail/'.$item->slug)}}"><img src="{{asset($item->image)}}" alt="Image Travel"></a>
                                            <button type="button" class="btn-more-category {{$item->category_name}} @if($item->category_id ==4)Life-arts@endif">{{$item->category_name}}</button>
                                            <div class="category-profile">
                                                <div class="box-profile">
                                                    <img src="{{asset($item->avatar)}}" alt="Avatar {{$item->user_name}}">
                                                    <span class="text-profile">{{$item->user_name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="div-text">
                                            <div class="line-text-cate">5 MIN READ</div>
                                            <a href="{{site_url('post-detail/'.$item->slug)}}" class="text-title">{{$item->title}}</a>
                                            <p class="text-content">{{$item->summary}}</p>
                                        </div>
                                    @endforeach
                                    <div class="more-related">
                                        @foreach($MoreTravel as $key => $moretravel)
                                            <div class="box-related">
                                                <div class="related-top <?=($key==1)?"related-center":"" ?>">
                                                    <a href="{{site_url('post-detail/'.$moretravel->slug)}}"><img src="{{asset($moretravel->image)}}" alt="Image Related 4"></a>
                                                    <a href="{{site_url('post-detail/'.$moretravel->slug)}}" class="text-related">{{$moretravel->title}}</a>
                                                    <p class="min-related">5 MIN READ</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-video col-lg-12 col-xs-12">
                        <div class="box-video">
                            <div class="video-big">
                                <video loop controls poster="{{asset('images/big-buck-bunny.png')}}">
                                    <source src="{{asset('videos/video-big-buck-bunny.mp4')}}">
                                </video>
                                <div class="txt-video-big">
                                    <div class="tag-video">JOHN CITIZEN <span style="color: blue;">IN</span> VIDEOS</div>
                                    <div class="title-video"><a href="https://www.youtube.com/watch?v=L8jogTjFJxM" title="JOHN CITIZEN">Astonishing demonstration of the Model left her Colleagues speechless</a></div>
                                </div>
                            </div>
                            <div class="more-videos">
                                <div class="box-more-video">
                                    <div class="more-video">
                                        <div class="img-more-video">
                                            <a href="https://youtu.be/SmWFk3z3bMs" target="_blank" class="click-to-video">
                                                <img src="{{asset('images/agriculture.jpg')}}" class="img-video" alt="Agriculture">
                                                <div class="icon-play">
                                                    <img src="{{asset('images/icon-play.png')}}" alt="Icon Play">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="text-more-videos">
                                            <p class="tag-more-videos">VIDEO <span class="time-more-video">01:45</span></p>
                                            <a href="https://youtu.be/Qmla9NLFBvU" target="_blank" class="title-more-videos">Agriculture is the Main sector of this Nation and the main</a>
                                            <p class="content-more-video">Sed porta sollicitudin eros, vel sagittis turpis consequat nec. Donec ac viverra ligula.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-more-video">
                                    <div class="more-video">
                                        <div class="img-more-video">
                                            <a href="https://youtu.be/SmWFk3z3bMs" target="_blank" class="click-to-video">
                                                <img src="{{asset('images/new-shortcuts.jpg')}}" class="img-video" alt="New shortcuts">
                                                <div class="icon-play">
                                                    <img src="{{asset('images/icon-play.png')}}" alt="Icon Play">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="text-more-videos">
                                            <p class="tag-more-videos">VIDEO <span class="time-more-video">00:52</span></p>
                                            <a href="https://youtu.be/SmWFk3z3bMs" target="_blank" class="title-more-videos">New shortcuts in the Operating System that are very helpful</a>
                                            <p class="content-more-video">Sed porta sollicitudin eros, vel sagittis turpis consequat nec. Donec ac viverra ligula.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-more-video">
                                    <div class="more-video">
                                        <div class="img-more-video">
                                            <a href="https://youtu.be/bxq5RGwClZQ" target="_blank" class="click-to-video">
                                                <img src="{{asset('images/new-leading-artist.jpg')}}" class="img-video" alt="New Leading Artist">
                                                <div class="icon-play">
                                                    <img src="{{asset('images/icon-play.png')}}" alt="Icon Play">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="text-more-videos">
                                            <p class="tag-more-videos">VIDEO <span class="time-more-video">00:30</span></p>
                                            <a href="https://youtu.be/bxq5RGwClZQ" target="_blank" class="title-more-videos">New leading Artist who Arrives on a tour of Europe</a>
                                            <p class="content-more-video">Sed porta sollicitudin eros, vel sagittis turpis consequat nec. Donec ac viverra ligula.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="see-all-comment">
                                    <a href="#" title="See All Comment">See All Comment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar col-lg-4 col-xs-12">
                    <div class="stay-connected">
                        <div class="text-stay">
                            STAY CONNECTED 
                            <button class="icon-stay-connect fas fa-ellipsis-h"></button>
                        </div>
                        
                        <div class="more-icon row">
                            <div class="box-more-icon">
                                <div class="connect-icon">
                                    <div class="icons ic-social-fb">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="text-icons">
                                        75.820 +
                                        <span class="txt-traffic">FANS</span>
                                    </div>
                                    <div class="btn-connect-icon btn-social-fb">
                                        <button class="btn-icon">Like Page</button>
                                    </div>
                                    <div class="clear-more-icon"></div>
                                </div>
                                <hr>

                                <div class="connect-icon">
                                    <div class="icons ic-social-tw">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="text-icons">
                                        27.275 + <span class="txt-traffic">FOLLOWERS</span>
                                    </div>
                                    <div class="btn-connect-icon btn-social-tw">
                                        <button class="btn-icon">Follow Us</button>
                                    </div>
                                    <div class="clear-more-icon"></div>
                                </div>

                                <hr>
                                <div class="connect-icon">
                                    <div class="icons ic-social-ins">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                    <div class="text-icons">
                                        19.275 + <span class="txt-traffic">FOLLOWERS</span>
                                    </div>
                                    <div class="btn-connect-icon btn-social-ins">
                                        <button class="btn-icon">Follow Us</button>
                                    </div>
                                    <div class="clear-more-icon"></div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="sidebar-image">
                        <div class="content-sidebar-image">
                            <div class="txt-sidebar-image">
                                <b>Zola</b> the perfect<br>site for <span class="format-text">news blogs</span><br>and <span class="format-text">magazine</span><br>portals
                            </div>
                            <div class="btn-sidebar-image">
                                <button>Buy Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="our-sponors">
                        <div class="title-our-sponors">OUR SPONSORS</div>
                        <div class="img-our-sponors">
                            <div class="img-our-sponors-left">
                                <div class="image-sponor">
                                    <a href="#"><img src="{{asset('images/our-sponors4.jpg')}}" alt="OUR SPONSORS"></a>
                                    <div class="text-img-sponor"><b>Zola</b> the perfect<br>site for <b>news</b></div>
                                </div>
                                <div class="image-sponor">
                                    <a href="#"><img src="{{asset('images/our-sponors3.jpg')}}" alt="OUR SPONSORS"></a>
                                    <div class="text-img-sponor">
                                        <img src="{{asset('images/logo-ZL-copi.png')}}" alt="">
                                        <div><b>new & blogs</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="img-our-sponors-right">
                                <div class="image-sponor">
                                    <a href="#"><img src="{{asset('images/our-sponors1.png')}}" class="zola-img" alt="OUR SPONSORS"></a>
                                </div>
                                <div class="image-sponor">
                                    <a href="#"><img src="{{asset('images/our-sponors2.jpg')}}" alt="OUR SPONSORS"></a>
                                    <div class="text-img-sponor">
                                        <h2><b>Zola</b></h2>
                                         the perfect site
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="twitter-feed">
                        <div class="title-twitter-feed">
                            TWITTER FEED
                            <button class="icon-stay-connect  fas fa-ellipsis-h"></button>
                        </div>
                        <div class="content-twitter-feed">
                            <div class="box-content-twitter">
                                <div class="img-box-content">
                                    <img src="{{asset('images/logo-ZL-copia.png')}}" alt="Logo Zola Copia" class="logo-zola-icon" 
                                    >
                                </div>
                                <div class="text-box-content">
                                    <div class="text-img-twitter">
                                        <b>Zola News</b> <span class="text-zolanew">@Zola News</span>
                                        <img src="{{asset('images/twitter-icon.png')}}" class="twitter-icon" alt="Twitter Icon">
                                    </div>
                                    <div class="text-content-twitter">
                                        Phasellus pulvinar iaculis nunc at placerat. Sed porta sollicitudin eros, vel sagittis turpis consequat nec
                                    </div>
                                    <div class="link-content-twitter">
                                        <a href="">envato.d.pr/h7ivMe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-content-twitter box-content-twitter2">
                                <div class="img-box-content">
                                    <img src="{{asset('images/logo-ZL-copia.png')}}" alt="Logo Zola Copia" class="logo-zola-icon" 
                                    >
                                </div>
                                <div class="text-box-content">
                                    <div class="text-img-twitter">
                                        <b>Zola News</b> <span class="text-zolanew">@Zola News</span>
                                        <img src="{{asset('images/twitter-icon.png')}}" class="twitter-icon" alt="Twitter Icon">
                                    </div>
                                    <div class="text-content-twitter">
                                        Phasellus pulvinar iaculis nunc at placerat. Sed porta sollicitudin eros, vel sagittis turpis consequat nec
                                    </div>
                                    <div class="link-content-twitter">
                                        <a href="">envato.d.pr/h7ivMe</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-content-twitter">
                                <div class="img-box-content">
                                    <img src="{{asset('images/logo-ZL-copia.png')}}" alt="Logo Zola Copia" class="logo-zola-icon" 
                                    >
                                </div>
                                <div class="text-box-content">
                                    <div class="text-img-twitter">
                                        <b>Zola News</b> <span class="text-zolanew">@Zola News</span>
                                        <img src="{{asset('images/twitter-icon.png')}}" class="twitter-icon" alt="Twitter Icon">
                                    </div>
                                    <div class="text-content-twitter">
                                        Phasellus pulvinar iaculis nunc at placerat. Sed porta sollicitudin eros, vel sagittis turpis consequat nec
                                    </div>
                                    <div class="link-content-twitter">
                                        <a href="">envato.d.pr/h7ivMe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- ADS -->
            <div class="ads col-lg-12 col-xs-12">
                <div class="ads-image">
                    <div class="img-ads">
                        <div class="text-ads">
                            <b>Zola</b> the perfect site for <b>news blogs</b><br>and <b>magazine</b> portals
                        </div>
                        <div>
                            <button class="btn-buy">Buy Now</button>
                        </div>
                    </div>     
                </div>
            </div>

        <!-- RECENT NEWS -->
            <div class="recent-news col-lg-12 col-xs-12">
                <div class="recent-news-parent col-lg-12 col-xs-12">
                    <div class="row">
                        @foreach($RecentNews as $key => $item)
                        <div class="recent-news-box col-lg-4 col-xs-12 <?= ($key==0 || $key==3 || $key==6 || $key==9)?"first":"" ?>">
                            <div class="div-box">
                                <div class="div-img">
                                    <a href="#"><img src="{{asset($item->image)}}" alt="{{$item->title}}"></a>
                                    <button type="button" class="btn-popular {{$item->category_name}} @if($item->category_id ==4)Life-arts@endif">{{$item->category_name}}</button>
                                </div>
                                <div class="div-text">
                                    <div class="line-color-text"></div>
                                    <a href="" class="text-title">{{$item->title}}</a>
                                    <p class="text-content">{{$item->summary}}</p>
                                </div>
                                <div class="popular-profile">
                                    <div class="box-profile">
                                        <img src="{{asset($item->avatar)}}" alt="Avatar {{$item->user_name}}">
                                        <span class="text-profile">{{$item->user_name}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>                
                <div class="btn-recent-news col-lg-12 col-xs-12">
                    <button>Load More</button>
                </div>
            </div>
    </div>
</div>
@endsection
@include('layouts.footer')