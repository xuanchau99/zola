@extends('admin.layouts.master')
@section('addPost')
<!-- START CONTENT -->
<section class="wrapper main-wrapper">

    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <h1 class="title">Add a Post</h1>
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
                        <strong>Add Post</strong>
                    </li>
                </ol>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Basic Info</h2>
                <div class="actions panel_actions pull-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <form action ="{{site_url('admin/store-post')}}" method="post" role="form" enctype="multipart/form-data">

                        <!-- {{validation_errors('<div class="alert alert-danger">', '</div>')}} -->
                        
                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                            <div class="form-group">
                                <label class="form-label">Post Title:</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" value="" name="title" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                            <div class="form-group">
                                <label class="form-label">Post Summary:</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" value="" name="summary" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-5">Post Content:</label>
                                <span class="desc"></span>
                                <textarea class="ckeditor" cols="80" id="editor1" name="content" rows="10" required>
                                </textarea><br>
                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                                <div class="form-group">
                                    <label class="form-label" for="field-1">Post Image:</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="file" class="form-control" name="file_image" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="field-5">Post Categories:</label>
                                    <span class="desc"></span>
                                    <select name="category_id" class="form-control">
                                        @foreach($ListCategories as $category)
                                            <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Is Popular:</label>
                                    <span class="desc"></span>
                                    <select name="is_popular" class="form-control">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Is Category:</label>
                                    <span class="desc"></span>
                                    <select name="is_category" class="form-control">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>


                            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                                <div class="text-left">
                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn">Cancel</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</section>
<!-- END CONTENT -->
@endsection