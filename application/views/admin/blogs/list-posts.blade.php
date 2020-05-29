@extends('admin.layouts.master')
@section('listPosts')
<!-- START CONTENT -->
<section class="wrapper main-wrapper">

    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div class="page-title">
            <div class="pull-left">
                <h1 class="title">Posts</h1>
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{site_url('admin')}}"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="blo-blogs.html">Posts</a>
                    </li>
                    <li class="active">
                        <strong>All Posts</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>


    <div class="col-md-9 col-sm-12 col-xs-12">

        <div class="input-group primary">
            <span class="input-group-addon">                
                <span class="arrow"></span>
                <i class="fa fa-search"></i>
            </span>
            <input type="text" class="form-control search-page-input" placeholder="Search" value="">
        </div><br>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12">
        <nav class="pull-right">
            <ul class="pagination pull-right" style="margin:0px;">
                <li><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
            </ul>

        </nav>
    </div>

    <div class="clearfix"></div><br>

    <div class="col-lg-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Blog Posts</h2>
                <div class="actions panel_actions pull-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                       
                        @if($this->session->flashdata('update'))
                            <h3 style="color: blue; text-align: center; font-weight: 500;">{{$this->session->flashdata('update')}}</h3>
                        @endif

                        @if($this->session->flashdata('delete'))
                            <h3 style="color: red; text-align: center; font-weight: 500;">{{$this->session->flashdata('delete')}}</h3>
                        @endif
                        <!-- start -->

                        @foreach($AllPost as $item)
                        <div class="blog_post">
                            <h3><a href="blo-blog-view.html">{{$item->title}}</a></h3>
                            <h5>Written by <b>{{$item->user_name}}</b> on <b>{{date("d/m/Y h:ia",strtotime($item->publish_time))}}</b>.</h5> 
                            <h5>@if($item->updated_at) Update on <b>{{$item->updated_at}}</b> @endif</h5>
                            <p class="blog_info">
                                <i class="fa fa-comment"></i> <a href="#comments">3 comments</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-tags"></i> <a href="#">responsive</a> <a href="#">web</a> <a href="#">mobile</a>
                            </p>
                            <img style="max-width: 600px;height: 100%; width:100%; margin:30px 0;" src="{{asset($item->image)}}" alt="">
                            <p class="blog-content">{{$item->summary}}</p>
                            <a href="blo-blog-view.html" class="btn btn-primary"><span>Read more</span>  &nbsp; <i class="fa fa-angle-double-right"></i></a>

                            <a href="{{site_url('admin/edit-post/'.$item->post_id)}}" class="btn btn-info" style="margin-left: 10px;" title="Edit this post">
                                <span>Edit</span>
                                &nbsp;<i class="fa fa-edit"></i>
                            </a>
                            <a href="{{site_url('admin/delete-post/'.$item->post_id)}}" class="delete-post btn btn-danger" style="margin-left: 10px;" title="Delete this post">
                                <span>Delete</span>
                                &nbsp;<i class=""> x </i>
                            </a>

                        </div>
                        @endforeach

                        <!-- end -->

                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<!-- END CONTENT -->
@endsection

