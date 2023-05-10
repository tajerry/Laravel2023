@extends('layouts.admin')
@section('title') Categories list @endsection
@section('content')
    <h2 class="float-center d-block mt-2 mr-1 text-center">Categories</h2>
    <div class="mb-3 pb-3">
        <a href="{!! route('admin.categories.create') !!}" class="float-right d-block  mb-3 mr-3 text-center" >Create category</a><br>
    </div>
@endsection

