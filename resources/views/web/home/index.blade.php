@extends('web.layouts.master')

@section('content')

<div class="homeMain mainDiv">
    <div class="greenBanner">
        <div class="cPDiv">
            @auth
            <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">welcome to <a
                    href="https://scoutingohio.com/">SCOUTINGOHIO.COM</a></h1>
            {{-- <div class="playerCoach d-flex justify-content-center gap-4">
                <div class="player d-flex justify-content-center align-items-center">
                    <h2><a href="sign-up.php">
                            High School
                            Player
                        </a></h2>
                    <a href="{{url('web_register?role=School Coach')}}">
            <div class="greenHov"></div>
            </a>
        </div>
        <div class="coach d-flex justify-content-center align-items-center">
            <h2><a href="{{url('web_register?role=College Coach')}}">College coach</a></h2>
            <a href="{{url('web_register?role=College Coach')}}">
                <div class="greenHov"></div>
            </a>
        </div>
        <div class="coach d-flex justify-content-center align-items-center">
            <h2><a href="{{url('web_register?role=Player')}}">High School coach</a></h2>
            <a href="{{url('web_register?role=Player')}}">
                <div class="greenHov"></div>
            </a>
        </div>
    </div> --}}
    @endauth
    @guest
    <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Registration For <a
            href="https://scoutingohio.com/">SCOUTINGOHIO.COM</a></h1>
    <div class="playerCoach d-flex justify-content-center gap-4">
        <div class="player d-flex justify-content-center align-items-center">
            <h2><a href="sign-up.php">
                    High School
                    Player
                </a></h2>
            <a href="{{url('web_register?role=School Coach')}}">
                <div class="greenHov"></div>
            </a>
        </div>
        <div class="coach d-flex justify-content-center align-items-center">
            <h2><a href="{{url('web_register?role=College Coach')}}">College coach</a></h2>
            <a href="{{url('web_register?role=College Coach')}}">
                <div class="greenHov"></div>
            </a>
        </div>
        <div class="coach d-flex justify-content-center align-items-center">
            <h2><a href="{{url('web_register?role=Player')}}">High School coach</a></h2>
            <a href="{{url('web_register?role=Player')}}">
                <div class="greenHov"></div>
            </a>
        </div>
    </div>
    @endguest
</div>
</div>
<div class="sliderDiv mt3">
    <div class="row g-0 flwx-wrape">
        <div class="col-lg-9">
            <div class="fakeTabs">
                <div class="col-lg-12 ">
                    <h1 class="wow fadeInUp article-heading Heavitas" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        Articles</h1>
                </div>
                <!-- <ul class="nav nav-tabs justify-content-center gap-5" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true" >Articles</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="profile" aria-selected="false" onclick="lateDiv('tab2')">news</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="contact" aria-selected="false" onclick="lateDiv('tab3')">HeadLines</button>
                        </li>
                      </ul> -->
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
                    <div class="owl-carousel owl-theme topcarop">
                        @foreach ($articles as $article )
                        <div class="item">
                            <div class="cCard">
                                <div class="img">
                                    <img src="{{asset('img/articles/'.$article->image)}}" height="" width="" alt="">
                                </div>
                                <div class="Chead">
                                    <a style="color: #55d729;!important"
                                        href="{{url('articles-detail/'.$article->id)}}">
                                        {{$article->title}}
                                    </a>
                                </div>
                                <div class="Ctxt">
                                    {{$article->content}}
                                </div>
                                <a style="color: #55d729;!important" href="{{url('articles-detail/'.$article->id)}}">
                                    <div class="CreaMore">
                                        Read More
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-12 text-center mb3">
                        <a href="{{route('articles')}}"><button class="more">More</button></a>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-lg-3">
            {{-- <div class="twittercard">
                    <div class="head"><span class="wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">Twitter</span></div>
                    <div class="twwetBy">
                        <span>Tweets By</span> <span>@mark_porter</span>
                    </div>
                    <div class="twwet">
                        <img src="{{asset('img/1x/twitter-8.png')}}" height="" width="" alt="" />
        </div>
        <div class="twwetBy two"></div>
    </div> --}}
    @auth
    @if (Auth::user()->type=="Admin")
    <div class="twitter-body">
        <h1 class="text">Login To See TweetS</h1>
        <div class="titer twitter-overlay">
            <div class="row mb-2">
                <div class="col-lg d-flex justify-content-between align-items-center">
                    <div class="retweet">
                        <i class="fa fa-retweet"></i>
                        <label for="">ScoutingOhio.com Retweeted</label>
                    </div>
                    <i class="fa fa-twitter fa-2x"></i>
                </div>
            </div>
            <div class="row twitter-content">
                <div class="col-lg-12">
                    <div class="twitter-profile d-flex align-items-start">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/8/8c/Cristiano_Ronaldo_2018.jpg"
                            alt="">
                        <div class="twitter-profile-det">
                            <h5>Bucknuts</h5>
                            <label for="">@Bucknuts247</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p>
                        <a href="">#Ohiostate</a> has an offer out to
                        <a href="">#DindyGabriel</a>. What do the <a href="">#Buckeyes</a> like
                        about the defensive lineman? <br>
                        <a href="">@Mark__Porter</a> gave his evaluation (VIP)
                        <a href="">247sprts.com/college/ohio-s</a>
                    </p>
                    <img class="mt-3" src="https://qph.fs.quoracdn.net/main-qimg-c423778894f61719e6e5344d6e2b3961.webp"
                        alt="">
                </div>
                <div class="twitter-footer d-flex justify-content-between align-items-center">
                    <div class="like-share-btn d-flex align-items-center">
                        <button><i class="fa fa-heart-o"></i></button>
                        <button><i class="fa fa-sign-out fa-lg"></i></button>
                    </div>
                    <div class="date-label">
                        6 May 2021
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="twitter-page">
        {{-- @foreach ($tweets as $tweet)
            <div class="twitter-body">
                <div class="row mb-2">
                </div>
                <div class="row twitter-content">
                    <div class="col-lg-12">
                        <div class="twitter-profile d-flex align-items-start">
                            <img src="{{$tweet['user']['profile_image_url_https']}}"
        alt="">
        <div class="twitter-profile-det">
            <h5> {{$tweet['user']['name']}}</h5>
            <label for=""> <span>@</span>{{$tweet['user']['screen_name']}}</label>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <p>

        {{ $tweet['text']}}
    </p>

    @if(count($tweet['entities']) > 4)
    <img class="mt-3" src="{{$tweet['extended_entities']['media'][0]['media_url']}}" alt="">
    @else
    <img hidden src="{{asset('img/SVG/youtube.svg')}}" alt="">
    @endif
</div>
<div class="twitter-footer d-flex justify-content-between align-items-center">
    <div class="like-share-btn d-flex align-items-center">
        <button hidden><i class="fa fa-heart-o"></i></button>
        <button hidden><i class="fa fa-sign-out fa-lg"></i></button>
    </div>
    <div class="date-label">
        {{$tweet['created_at']}}
    </div>
</div>
</div>
</div>
@endforeach --}}

</div>
@endif
@endauth

@guest
<div class="twitter-body">
    <h1 class="text">Login To See TweetS</h1>
    <div class="titer twitter-overlay">
        <div class="row mb-2">
            <div class="col-lg d-flex justify-content-between align-items-center">
                <div class="retweet">
                    <i class="fa fa-retweet"></i>
                    <label for="">ScoutingOhio.com Retweeted</label>
                </div>
                <i class="fa fa-twitter fa-2x"></i>
            </div>
        </div>
        <div class="row twitter-content">
            <div class="col-lg-12">
                <div class="twitter-profile d-flex align-items-start">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/8c/Cristiano_Ronaldo_2018.jpg" alt="">
                    <div class="twitter-profile-det">
                        <h5>Bucknuts</h5>
                        <label for="">@Bucknuts247</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <p>
                    <a href="">#Ohiostate</a> has an offer out to
                    <a href="">#DindyGabriel</a>. What do the <a href="">#Buckeyes</a> like
                    about the defensive lineman? <br>
                    <a href="">@Mark__Porter</a> gave his evaluation (VIP)
                    <a href="">247sprts.com/college/ohio-s</a>
                </p>
                <img class="mt-3" src="https://qph.fs.quoracdn.net/main-qimg-c423778894f61719e6e5344d6e2b3961.webp"
                    alt="">
            </div>
            <div class="twitter-footer d-flex justify-content-between align-items-center">
                <div class="like-share-btn d-flex align-items-center">
                    <button><i class="fa fa-heart-o"></i></button>
                    <button><i class="fa fa-sign-out fa-lg"></i></button>
                </div>
                <div class="date-label">
                    6 May 2021
                </div>
            </div>
        </div>
    </div>
</div>
@endguest
</div>
<div class="row">
    <div class="col-lg-9">
        <div class="latestVideo">
            <div class="col-lg-12">
                <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Latest Videos</h1>
            </div>
            <div class="tab-content" id="myTabContent2">
                <div class="tab-pane fade show active" id="Newest" role="tabpanel" aria-labelledby="Newest-tab">
                    <div class="owl-carousel owl-theme videos">
                        @foreach ($videos->chunk(6) as $chunk)
                        <div class="item">

                            <div class="dGrid">
                                @foreach ($chunk as $video)
                                <div class="dGItem">
                                    @if ($video->hudl_thumbnail)
                                    <img class="pl-img" src="{{asset('img/videos/'.$video->hudl_thumbnail)}}" height="100%"
                                        width="100%" alt="">
                                    @else
                                    <img class="pl-img" src="{{asset('img/noimg.jpg')}}" height="100%" width="100%" alt="">
                                    @endif

                                    <div class="img-txt">

                                        NAME {{$video->user->name}} - HIGH SCHOOL
                                        {{$video->user->basicInfo->high_school ?? " "}} <br /> CLASS
                                        OF{{$video->user->basicInfo->class_off ?? ""}} -
                                        POSITION{{$video->user->basicInfo->special_team_position?? ""}}
                                    </div>
                                    <input type="hidden" value="{{$video->hudl_link}}" name="video_url"
                                        id="url_link{{$video->id}}">
                                    <img src="{{asset('img/1x/plahhov.png')}}" height="100%" width="100%" class="forHover"
                                        onclick="geturl('url_link'+{{$video->id}})" alt="">

                                </div>

                                @endforeach
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="online-frnds-head mb1">
            <h1>
                Community - Whos Online
            </h1>
        </div>
        <div class="online-frmds customClassheight">
            @foreach ($displayUsers as $displayUser )
            <div class="fans-noti tooltip1">
                <i class="fa fa-circle float-end"></i>
                {{-- <h1>{{$displayUser['id']}}</h1> --}}
                <a href="{{route('user-profile',$displayUser['id'])}}">
                    <img src="{{asset('user_image/noimg.jpg')}}"
                    alt="">
                </a>
                <span class="tooltiptext1">{{$displayUser['first_name']}}</span>
            </div>
            @endforeach

        </div>
    </div>
</div>
</div>
<button id="vidModal" hidden="hidden" data-bs-toggle="modal" data-bs-target="#exampleModalVideo"></button>
{{-- <div class="latestVideo">
    <div class="col-lg-12">
        <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Latest Videos</h1>
    </div>
    <div class="tab-content" id="myTabContent2">
        <div class="tab-pane fade show active" id="Newest" role="tabpanel" aria-labelledby="Newest-tab">
            <div class="owl-carousel owl-theme videos">
                @foreach ($videos->chunk(6) as $chunk)
                <div class="item">

                    <div class="dGrid">
                        @foreach ($chunk as $video)
                        <div class="dGItem">
                            @if ($video->hudl_thumbnail)
                            <img class="pl-img" src="{{asset('img/videos/'.$video->hudl_thumbnail)}}" height="100%"
                                width="100%" alt="">
                            @else
                            <img class="pl-img" src="{{asset('img/noimg.jpg')}}" height="100%" width="100%" alt="">
                            @endif

                            <div class="img-txt">

                                NAME {{$video->user->name}} - HIGH SCHOOL
                                {{$video->user->basicInfo->high_school ?? " "}} <br /> CLASS
                                OF{{$video->user->basicInfo->class_off ?? ""}} -
                                POSITION{{$video->user->basicInfo->special_team_position?? ""}}
                            </div>
                            <input type="hidden" value="{{$video->hudl_link}}" name="video_url"
                                id="url_link{{$video->id}}">
                            <img src="{{asset('img/1x/plahhov.png')}}" height="100%" width="100%" class="forHover"
                                onclick="geturl('url_link'+{{$video->id}})" alt="">

                        </div>

                        @endforeach
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div> --}}
<div class="offers mt2">
    <div class="col-lg-12 text-center">
        <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Latest College Offers</h1>
    </div>
    <div class="userTableCustom">
        <div class="inner">
            <div class="userRow d-flex userR1">
                <div class="img">
                    <!-- <img src="assets/img/1x/user1.png" height="100%" width="100%" alt=""> -->
                </div>
                <div class="userData">
                    <div class="dataG1">Player name</div>
                    <div class="dataG1">Height</div>
                    <div class="dataG1">Weight</div>
                    <div class="dataG1">From</div>
                    <div class="dataG1">High School</div>
                    <div class="dataG1">Graduation Year</div>
                </div>
            </div>
            @foreach ($Players as $item)
            <div class="userRow d-flex">
                <div class="img">
                    @if ($item->user_profile)
                    <img src="{{asset('user_image').'/'.$item->user_profile}}" height="100%" width="100%" alt="">
                    @else
                    <img src="{{asset('img/noplayerimage.png')}}" height="100%" width="100%" alt="">
                    @endif
                </div>
                <div class="userData">
                    <div class="dataG1"><a href="{{route('user-profile',$item->id)}}">{{$item->name}}</a></div>
                    <div class="dataG1">{{$item->basicInfo->height ?? " "}}</div>
                    <div class="dataG1">{{$item->basicInfo->weight ?? " "}}
                    @if (empty($item->basicInfo->weight))
                        --
                    @else
                        LBS
                    @endif
                    </div>
                    <div class="dataG1">{{$item->basicInfo->high_school ?? ""}}</div>
                    <div class="dataG1">{{$item->personalInfo->player_state ?? ""}}</div>
                    <div class="dataG1"> 2022</div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-lg-12 text-center">
            <a href="{{route('players')}}">
                <button class="allBtn mt2">View All</button>
            </a>
        </div>
    </div>
</div>
</div>
</div>
<script>
    // var link = $('#txt_name').val();
    // console.log(video_url)
    var mBtnn = document.getElementById('vidModal')
    async function geturl(id) {
        console.log(id);
        var idr = document.getElementById(id);
        console.log(idr.value)
        $('#exampleModalVideo .modal-body iframe').attr("src", idr.value);
        setTimeout(() => {
            mBtnn.click()
        }, 500)
    }

</script>
<style>
    .twitter-body {
        background-color: #fff;
        padding: 1rem;
        width: 310px;
        height: auto;
        position: relative;
    }

    .twitter-overlay {
        filter: blur(10px);
    }

    .text {
        position: absolute;
        top: 40%;
        left: 15%;
        z-index: 100;
        font-family: "bebuseRegular";
        font-size: 2rem;
        font-weight: bold;
        COLOR: #55d729;
    }


    .twitter-profile img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        object-position: 0px 0%;
    }

    .twitter-profile-det {
        padding-left: 10px;
    }

    .fa-retweet {
        background-color: #21dd85;
        padding: 1px 1px 2px 1px;
        color: #fff;
        border-radius: 5px;
    }

    .retweet label,
    .twitter-profile-det label,
    .date-label {
        color: grey;
    }

    .fa-twitter {
        color: #d6d6d6;
    }

    .twitter-content a {
        text-decoration: none;
    }

    .twitter-content img:nth-child(2) {
        height: 200px;
        width: 100%;
        object-fit: cover;
        object-position: 0px 0%;
        border-radius: 5px;
    }

    .twitter-page {
        overflow-y: scroll;
        height: 510px;
    }

    .like-share-btn button {
        background-color: transparent;
        border: none;
        padding: 15px;
        color: grey;
    }

    .twitter-content p {
        padding: 5px 0 5px 0;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .fa-heart-o:hover {
        color: red;
    }

    .fa-sign-out:hover {
        color: black;
    }

    .online-frmds {
        height: 300px;
        width: 100%;
        overflow: scroll;

    }

    .online-frmds img {
        width: 20%;
        height: auto;
        margin-bottom: 20px;
    }

    .online-frnds-head h1 {
        font-size: 14px;
        font-family: 'Heavitas' !important;
        font-weight: 200 !important;
    }

    .img-txt {
        color: white;
        position: absolute;
        bottom: 0;
        text-align: left;
        font-size: 14px;
        font-family: poppinsregular;
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
        padding: 0 1rem 0 0;
        height: 30%;
        width: 100%;
        z-index: 1;
        color: #fff;
        font-family: 'poppinregular';
        padding: 5px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .img-txt::before {
        content: "";
        bottom: 0;
        left: 0;
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #328018ad;
        z-index: -1;
    }

    .pl-img {
        position: relative;
    }
    .tooltip1{
        position: relative;
    }
    .tooltip1 i{
        color: #55d729
    }
    @media only screen and (max-width:1960px){
        .online-frnds-head{
            margin-top:2rem;

        }
    }
</style>

<script>
    var tweety = {!!json_encode($tweets)!!},
        arr = [];
    console.log(tweety)
    setTimeout(() => {
        for (var i = 0; i < 100000; i++) {
            if (tweety[i] === undefined) {
                break
            } else {
                arr.push(tweety[i]);
                tweetAppend(arr[i])
            }
        }
    }, 1000)

    // var tweetyi = document.getElementsByClassName('twitter-page')[0]
    function tweetAppend(d) {
        console.log(moment("12-25-1995", "MM-DD-YYYY"))
        $('.twitter-page').append(`
        <div class="twitter-body">
    <div class="row mb-2">
    </div>
    <div class="row twitter-content">
        <div class="col-lg-12">
            <div class="twitter-profile d-flex align-items-start">
                <img src="${d.user.profile_image_url_https}"
                    alt="">
                <div class="twitter-profile-det">
                    <h5> ${d.user.name}</h5>
                    <label for=""> <span>@</span>${d.user.screen_name}</label>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <p>

                ${
                    urlify(d.text)
                }

            </p>

            <img class="mt-3"
                src="${
                    d.entities.media ? d.entities.media[0].media_url_https : null
                }" alt="" style="display:${d.entities.media ? 'block' : 'none'}">


        </div>
        <div class="twitter-footer d-flex justify-content-between align-items-center">
            <div class="like-share-btn d-flex align-items-center">
                <button hidden><i class="fa fa-heart-o"></i></button>
                <button hidden><i class="fa fa-sign-out fa-lg"></i></button>
            </div>
            <div class="date-label">
               ${moment(d.create_at).format('MM-DD-YYYY')}
            </div>
        </div>
    </div>
</div>
        `)
    }




    function urlify(text) {
        var urlRegex = /(https?:\/\/[^\s]+)/g;
        return text.replace(urlRegex, function (url) {
            return '<a href="' + url + '">' + url + '</a>';
        })
        // or alternatively
        // return text.replace(urlRegex, '<a href="$1">$1</a>')
    }

    var text = 'Find me at http://www.example.com and also at http://stackoverflow.com';
    var html = urlify(text);

    console.log(html)

</script>


@endsection
