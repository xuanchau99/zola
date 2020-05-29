@extends('layouts.master')
@include('layouts.header')
@section('category')
<div class="category container">
    <div class="row">
    <!-- SLIDER -->
        <div class="slider-category col-lg-12 col-xs-12">
            <div class="swiper-container swiper-category">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
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

                    <div class="swiper-slide">
                        <a href="https://zingnews.vn/" target="_blank">
                            <div class="slider-hover">
                                <img src="{{asset('images/lost-frequencies.jpg')}}" alt="Lost Frequencies">
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

                    <div class="swiper-slide">
                        <a href="https://zingnews.vn/" target="_blank">
                            <div class="slider-hover">
                                <img src="{{asset('images/phys-ed.jpg')}}" alt="Phys Ed">
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

                    <div class="swiper-slide">
                        <a href="https://zingnews.vn/" target="_blank">
                            <div class="slider-hover">
                                <img src="{{asset('images/volleyball-women.jpg')}}" alt="Volleyball Women"> 
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

                    <div class="swiper-slide">
                        <a href="https://zingnews.vn/" target="_blank">
                            <div class="slider-hover">
                                <img src="{{asset('images/slider4.jpg')}}" alt="Slider 4"> 
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

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    <!-- END SLIDER -->

    <!-- LIST CATEGORY -->
        <div class="list-category col-lg-8 col-xs-12">
            <div class="post-category col-lg-12">
                @foreach($ListCategories as $key => $item)
                    <div class="post-category-right col-lg-6 <?= ($key%2 == 0)?"post-category-left":"" ?>">
                        <div class="post-category-img">
                            <img src="{{asset($item->image)}}" alt="Image {{$item->title}}">
                            <button type="button" class="btn-post-category {{$item->category_name}} @if($item->category_id ==4)Life-arts@endif">{{$item->category_name}}</button>
                        </div>
                        <div class="post-category-content">
                            <div class="line-category-content"></div>
                            <div class="title">
                                <a href="{{site_url('post-detail/'.$item->slug)}}" class="a-title">{{$item->title}}</a>
                            </div>
                            <div class="summary">
                                {{$item->summary}}
                            </div>
                        </div>
                        <div class="pots-category-footer">
                            <div class="profile-category">
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
    <!-- END LIST CATEGORY -->

    <!-- SIDEBAR -->
        <div class="detail-sidebar col-lg-4 col-xs-12">
            <div class="trending-news">
                <div class="trending-news-title">
                    TRENDING NEWS
                    <button class="icon-stay-connect fas fa-ellipsis-h"></button>
                </div>
                <div class="trending-news-content">
                    <div class="item-trending-news">
                        <a href="#">
                            <img src="{{asset('images/avatar.jpg')}}" alt="TRENDING">
                            <div class="title-item-news">
                                The Most beautiful places visited by thousands of people on the planet
                            </div>
                        </a>
                        <div class="time-item-news">
                            8 MIN READ
                        </div>
                        <hr>
                    </div>
                    <div class="item-trending-news">
                        <a href="#">
                            <img src="{{asset('images/avatar.jpg')}}" alt="TRENDING">
                            <div class="title-item-news">
                                The Most beautiful places visited by thousands of people on the planet
                            </div>
                        </a>
                        <div class="time-item-news">
                            8 MIN READ
                        </div>
                        <hr>
                    </div>
                    <div class="item-trending-news">
                        <a href="#">
                            <img src="{{asset('images/avatar.jpg')}}" alt="TRENDING">
                            <div class="title-item-news">
                                The Most beautiful places visited by thousands of people on the planet
                            </div>
                        </a>
                        <div class="time-item-news">
                            8 MIN READ
                        </div>
                        <hr>
                    </div>
                    <div class="item-trending-news">
                        <a href="#">
                            <img src="{{asset('images/avatar.jpg')}}" alt="TRENDING">
                            <div class="title-item-news">
                                The Most beautiful places visited by thousands of people on the planet
                            </div>
                        </a>
                        <div class="time-item-news">
                            8 MIN READ
                        </div>
                    </div>
                </div>
            </div>

            <div class="our-sponors">
                <div class="title-our-sponors">OUR SPONSORS</div>
                <div class="img-our-sponors">
                    <div class="img-our-sponors-left">
                        <div class="image-sponor">
                            <a href="#"><img src="<?php echo asset('images/our-sponors4.jpg');?>" alt="OUR SPONSORS"></a>
                            <div class="text-img-sponor"><b>Zola</b> the perfect<br>site for <b>news</b></div>
                        </div>
                        <div class="image-sponor">
                            <a href="#"><img src="<?php echo asset('images/our-sponors3.jpg');?>" alt="OUR SPONSORS"></a>
                            <div class="text-img-sponor">
                                <img src="<?php echo asset('images/logo-ZL-copi.png');?>" alt="">
                                <div><b>new & blogs</b></div>
                            </div>
                        </div>
                    </div>
                    <div class="img-our-sponors-right">
                        <div class="image-sponor">
                            <a href="#"><img src="<?php echo asset('images/our-sponors1.png');?>" class="zola-img" alt="OUR SPONSORS"></a>
                        </div>
                        <div class="image-sponor">
                            <a href="#"><img src="<?php echo asset('images/our-sponors2.jpg');?>" alt="OUR SPONSORS"></a>
                            <div class="text-img-sponor">
                                <h2><b>Zola</b></h2>
                                 the perfect site
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="twitter-feed sidebar-twitter">
                <div class="title-twitter-feed">
                    TWITTER FEED
                    <button class="icon-stay-connect  fas fa-ellipsis-h"></button>
                </div>
                <div class="content-twitter-feed">
                    <div class="box-content-twitter">
                        <div class="img-box-content">
                            <img src="<?php echo asset('images/logo-ZL-copia.png');?>" alt="Logo Zola Copia" class="logo-zola-icon" 
                            >
                        </div>
                        <div class="text-box-content">
                            <div class="text-img-twitter">
                                <b>Zola News</b> <span class="text-zolanew">@Zola News</span>
                                <img src="<?php echo asset('images/twitter-icon.png');?>" class="twitter-icon" alt="Twitter Icon">
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
                            <img src="<?php echo asset('images/logo-ZL-copia.png');?>" alt="Logo Zola Copia" class="logo-zola-icon" 
                            >
                        </div>
                        <div class="text-box-content">
                            <div class="text-img-twitter">
                                <b>Zola News</b> <span class="text-zolanew">@Zola News</span>
                                <img src="<?php echo asset('images/twitter-icon.png');?>" class="twitter-icon" alt="Twitter Icon">
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
                            <img src="<?php echo asset('images/logo-ZL-copia.png');?>" alt="Logo Zola Copia" class="logo-zola-icon" 
                            >
                        </div>
                        <div class="text-box-content">
                            <div class="text-img-twitter">
                                <b>Zola News</b> <span class="text-zolanew">@Zola News</span>
                                <img src="<?php echo asset('images/twitter-icon.png');?>" class="twitter-icon" alt="Twitter Icon">
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
        </div>
    <!-- END SIDEBAR -->
    </div>
</div>
@endsection
@include('layouts.footer')