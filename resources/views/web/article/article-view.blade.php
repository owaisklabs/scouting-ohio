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
    <h1>Comments</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="comments">
                @foreach ($comment123->comments as $comments)
                <div class="maincomt" style="width:fit-content;">
                    <div class="d-flex top">
                        @if ($comments->user->user_profile)
                        <img src="{{asset('user_image'.'/'.$comments->user->user_profile)}}"
                            alt="">
                        @else
                        <img src="{{asset('user_image/noimg.jpg')}}"
                            alt="">
                        @endif
                        <div class="card">
                            <div class="card-body">
                                @if ($comments->user->type ==='Player')
                                <a style="text-decoration: none;color: #55d729;" href="{{route('user-profile',$comments->user->id)}}"><h6>{{$comments->user->name}}</h6></a>
                                @else
                                <a style="text-decoration: none;color: #55d729;" href="{{route('coach-profile',$comments->user->id)}}"><h6>{{$comments->user->name}}</h6></a>
                                @endif
                                <P> {{$comments->text}}</P>
                            </div>
                        </div>
                    </div>
                    <div class="button">


                        @if (count($comments->likes) == 0)
                            <button class="like-btn {{$comments->id}}" data-comment-id="{{$comments->id}}" data-article-id="{{$article->id}}" >Like</button>
                        @else
                        <button class="like-btn {{$comments->id}}" data-comment-id="{{$comments->id}}" data-article-id="{{$article->id}}" >Unlike</button>
                        @endif


                        <label for="" class='like-label'><i class="fa fa-thumbs-up"></i> {{App\Models\Like::where('comment_id',$comments->id)->count()}}</label>

                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
    @auth

    <div class="add-comment-sec">

        <h1>Add Comment</h1>
        <div class="input-div">
            <form action="{{route('comment')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$article->id}}" name="article_id" id="">
                <input placeholder="Comment" required type="text" name="text">
                <button type="submit">
                    <i class="fa fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
    @endauth
</div>
<script>
    $( ".like-btn" ).click(function() {
        var comment_id = $(this).data("comment-id")
        var article_id = $(this).data("article-id")
        $.ajax({
            method: "POST",
            url: '{{route('like')}}',
            data: {
                comment_id : comment_id,
                article_id : article_id,
            },
            dataType: 'json',
            success: function (data) {
                console.log(data.data.comment_id);
                if(data.status == 'like done'){
                    $(`.like-btn.${data.data.comment_id}`).text('Unlike')
                }else if(data.status == 'unlike done'){
                    $(`.like-btn.${data.data.comment_id}`).text('Like')
                }
            },
            error:function (data) {
                console.log(data)
            }
        });
});
</script>
@endsection


<style>
    .add-comment-sec h1 {
        margin-left: 3rem;
    }

    .input-div {
        position: relative;
        width: 45%;
        margin-top: 1rem;
        margin-left: 3rem;
    }

    .input-div i {
        position: absolute;
        right: 3.5%;
        top: 50%;
        transform: translateY(-50%);
        color: #55d729;
    }

    .input-div input {
        width: 100%;
        border-radius: 20px;
        padding: 0.5rem 2.5rem 0.5rem 1rem;
        border: 1px solid #3d3d3da1;
        outline: none;
    }

    .like-label {
        float: right;
    }

    .like-label i {
        color: #508ce6;
    }

    .comments img {
        border-radius: 100%;
        height: 40px;
        width: 40px;
        object-fit: cover;
}
    }

    .top {
        margin-top: 20px;
    }

    .card {
        border: none !important;
        /* width: 30%; */
        background-color: rgb(221, 220, 220) !important;
        border-radius: 18px !important;
        margin-bottom: 5px;
        margin-left: 9px;
        min-width: 590px !important;
    }
    .card-body p{
        display: block !important;
    }
    .button {
        /* margin-left: 4%; */
        padding-left: 3.1rem;
    }

    button {
        border-style: none;
        background: none;
    }

    .card-body {
        padding-bottom: 0% !important;
    }

    .card-body h6 {
        font-weight: bold;
    }

    .card-body p {
        font-size: 14px;
    }

    button {
        font-size: 14px !important;
        color: rgb(90, 90, 90);
        font-weight: 600;
    }

    .day {
        font-size: 14px !important;
        color: rgb(175, 172, 172);
        font-weight: 600;
    }

</style>
