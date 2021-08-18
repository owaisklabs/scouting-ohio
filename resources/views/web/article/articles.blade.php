@extends('web.layouts.master')

@section('content')
    <!-- sidebars -->

    <div class="articlemain mainDiv">
        <div class="col-lg-12 text-center">
            <h1>Articles</h1>
        </div>
        <div class="arGrid mt6 articlesFeed">
            @foreach ( $articles as $article)
            <div class="arrItem">
                <div class="image">
                    <img src="{{asset('img/articles/'.$article->image)}}" height="100%" width="100%" alt="" />
                </div>
                <div class="subh">
                    {{$article->title}}
                </div>
                <div class="para">
                    {{$article->content}}
                </div>
                <a href="{{url('articles-detail/'.$article->id)}}">
                    <div class="CreaMore">
                    Read More
                </div></a>
            </div>
            @endforeach




        </div>
    </div>
@endsection
