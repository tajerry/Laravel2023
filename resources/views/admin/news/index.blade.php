@extends('layouts.admin')
@section('title') News list @parent @endsection
@section('content')
    <h2 class="float-center d-block mt-3 mb-3 mr-3 text-center">News</h2>
    <a href="{{route('admin.news.create')}}" class="float-right d-block mt-3 mb-3 mr-3 text-center" >Create news</a>
@endsection
