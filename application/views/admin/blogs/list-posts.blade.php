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

                        <div class="blog_post">
                            
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Summary</th>
                                        <th>Author</th>
                                        <th>Publish Time</th>
                                        <th>Update At</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($AllPost as $key => $item)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><img style="height: 100px; width: 180px;" src="{{asset($item->image)}}" alt=""></td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->summary}}</td>
                                        <td>{{$item->user_name}}</td>
                                        <td><b>{{date("d/m/Y h:ia",strtotime($item->publish_time))}}</b></td>
                                        <td>{{$item->updated_at}}</td>
                                        <td>
                                            <a href="{{site_url('admin/edit-post/'.$item->post_id)}}" class="btn btn-info" style="margin-left: 10px;" title="Edit this post">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{site_url('admin/delete-post/'.$item->post_id)}}" class="delete-post btn btn-danger" style="margin-left: 10px;" title="Delete this post">
                                                <i class=""> x </i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<!-- END CONTENT -->
@endsection

