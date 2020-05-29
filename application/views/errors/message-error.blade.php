@extends('layouts.master')
@section('messageError')
<div class="container">
    <h4 style="color:red; margin-bottom: 10px;">Update Failed:</h4>
    <h5 style="color: red; font-style: italic;">{{$error}}</h5>
    <button type="button" class="btn btn-info" onclick="window.history.go(-1); return false;">Back</button>
</div>
@endsection