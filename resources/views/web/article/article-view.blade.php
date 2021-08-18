@extends('web.layouts.master')
@section('content')
<div class="articleView mainDiv">
    <div class="arImg">
        <img src="{{asset('img/articles/'.$article->image)}}" height="" width="" alt="">
    </div>
    <h1>{{$article->title}}</h1>
    <h5>{{$article->created_at}}</h5>

    <p>
        {{$article->content}}
    </p>
</div>
        @endsection
