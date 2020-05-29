@extends('layouts.master')
@include('layouts.header')
@section('postDetails')
<div class="blog-details container">
    <div class="row">
        @foreach ($PostDetail as $post)
        <div class="details col-lg-8 col-xs-12">
            <div class="detail-header">
                <div class="publish-time">
                    <span class="category-publish-time">{{strtoupper($post->category_name)}}</span> OCTOBER 19, 2018 - 2:45 PM - 2 DAYS AGO
                </div>
                <div class="detail-title">
                    <p>{{$post->title}}</p>
                </div>
                <div class="detail-profile">
                    <img src="{{asset($post->avatar)}}" alt="Avatar Profile">
                    <div class="profile-name">
                        {{$post->user_name}}
                    </div>
                    <div class="info">
                        <i class="like i-info far fa-heart">90</i>
                        <i class="share i-info fas fa-share-alt">51</i>
                        <i class="comment i-info far fa-comment-dots">1390</i>
                    </div>
                </div>
            </div>

            <div class="detail-img">
                <div class="detail-image">
                    <img src="{{asset($post->image)}}" alt="Img post detail">
                    <button type="button" class="btn-category">Sport</button>
                </div>
            </div>

            <div class="detail-content">
                <div class="detail-summary">
                    {{$post->summary}}
                </div>
                <div class="post-content">
                    {{$post->content}}
                </div>
            </div>

            <div class="detail-buttons">
                <button type="button" class="like btn far fa-heart"></button>
                <button type="button" class="facebook btn fab fa-facebook-f"><span class="text-btn">62</span></button>
                <button type="button" class="twitter btn fab fa-twitter"><span class="text-btn">73</span></button>
                <button type="button" class="instagram btn fab fa-instagram"><span class="text-btn">11</span></button>
                <button type="button" class="pinterest btn fab fa-pinterest-p"><span class="text-btn">5</span></button>
                <button type="button" class="comment btn far fa-comment-dots"><span class="text-btn">1.3k Comment</span></button>
            </div>

            <div class="related-posts">
                <div class="title-related-posts">Related Posts</div>
                <div class="content-related-posts">
                    <div class="item-related-posts">
                        <div class="items">
                            <div class="items-img">
                                <a href="#"><img src="{{asset('images/avatar.jpg')}}" alt="related"></a>
                            </div>
                            <div class="items-content">
                                <div class="category">
                                    <a href="#1">ECONOMY</a>
                                </div>  
                                <a href="#2">
                                    <div class="title">
                                        Happily engaged: the young singer now a member of the big screen
                                    </div>
                                    <div class="description">
                                        Sed porta sollicitudin eros, vel sagittis turpis consequat nec. Donec ac viverra ligula.
                                    </div> 
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item-related-posts">
                        <div class="items">
                            <div class="items-img">
                                <a href="#"><img src="{{asset('images/avatar.jpg')}}" alt="related"></a>
                            </div>
                            <div class="items-content">
                                <div class="category">
                                    <a href="#1">ECONOMY</a>
                                </div>  
                                <a href="#2">
                                    <div class="title">
                                        Happily engaged: the young singer now a member of the big screen
                                    </div>
                                    <div class="description">
                                        Sed porta sollicitudin eros, vel sagittis turpis consequat nec. Donec ac viverra ligula.
                                    </div> 
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item-related-posts">
                        <div class="items">
                            <div class="items-img">
                                <a href="#"><img src="{{asset('images/avatar.jpg')}}" alt="related"></a>
                            </div>
                            <div class="items-content">
                                <div class="category">
                                    <a href="#1">ECONOMY</a>
                                </div>  
                                <a href="#2">
                                    <div class="title">
                                        Happily engaged: the young singer now a member of the big screen
                                    </div>
                                    <div class="description">
                                        Sed porta sollicitudin eros, vel sagittis turpis consequat nec. Donec ac viverra ligula.
                                    </div> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
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
    </div>
</div>
@endsection
@include('layouts.footer')