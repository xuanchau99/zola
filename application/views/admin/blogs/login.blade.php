@extends('layouts.master')
@section('formLogin')
	<div class="form-login">
	    <form method="post" action="{{site_url('admin/login')}}">
	   		<h3 class="title">LOGIN</h3>
	   		<p class="login-fail">{{$this->session->flashdata('error')}}</p>
	        <div class="form-group">
	             <label>Username:</label>
	             <input type="text" name="username" class="form-control">
	             <span class="text-danger">{{form_error('username')}}</span>
	        </div>
	        <div class="form-group">
	             <label>Password:</label>
	             <input type="password" name="password" class="form-control">
	             <span class="text-danger">{{form_error('password')}}</span>
	        </div>
	        <div class="form-group">
	             <input type="submit" value="Login" class="btn btn-info">
	             <a href="{{site_url('/')}}" class="btn btn-default back-to-home">Back</a>
	        </div>
	    </form>
	</div>
@endsection