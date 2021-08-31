@extends('web.layouts.master')
@section('content')
<div class="PprofileMain mainDiv">
    <div class="sliderDiv ">
        <div class="row g-0 flwx-wrape">
            <div class="col-lg-9">

                <div class="profileM">
                    <div class="back"
                        style="background: url({{asset('user_image').'/'.$user->user_cover}}) no-repeat center center / contain;">
                        <img src="{{asset('img/1x/greenbg-8.png')}}" alt="">
                    </div>
                    <div class="proDetails">
                        <div class="d-flex ty">
                            <div class="img">
                                @if ($user->user_profile)
                                <img src="{{asset('user_image').'/'.$user->user_profile}}" height="" width="" alt="">
                                @else
                                <img src="{{asset('img/noplayerimage.png')}}" height="" width="" alt="">
                                @endif
                            </div>
                            <div class="nameD d-flex">
                                <div class="d-flex flex-column w100  justify-content-end">
                                    <h1 class="forMobile">{{$user->name ?? " "}}</h1>
                                    {{-- @auth
                                    @if (auth()->user()->type ==='college coach'||auth()->user()->type ==='Caoch')
                                    <div class="btns d-flex gap-2">
                                        @if ($check)
                                        <form action="{{route('remove-friend')}}" method="POST">
                                            @csrf
                                            <button class="unfollow-btn" type="submit">Un Follow</button>
                                            <button class="msg-btn">Message</button>
                                            <input type="text" name="player_id" value="{{$user->id}}" hidden>
                                        </form>
                                        @else
                                        <form action="{{route('add-friend')}}" method="POST">
                                            @csrf
                                            <button class="add-frnd-btn add-btn" type="submit">Follow</button>
                                            <input type="text" name="player_id" value="{{$user->id}}" hidden>
                                        </form>
                                        @endif


                                        <div class="dots d-flex flex-column">
                                            <i class="fa fa-square"></i>
                                            <i class="fa fa-square"></i>
                                            <i class="fa fa-square"></i>
                                        </div>
                                    </div>
                                    @else
                                    @endauth
                                    @endif --}}
                                    {{-- <div class="deta d-flex justify-content-between">
                                        <h1 class="forDesktop">{{$user->name ?? " "}}</h1>
                                        <div class="imgs d-flex">
                                            <div class="forDesktop">
                                                <div class="tfour d-flex justify-content-end ">
                                                   <a href="{{$user->userLink->database_rivals ?? "https://n.rivals.com/" }}" target="_blank"> <img src="{{asset('img/1x/rivals-8.png')}}" height="" width=""
                                                    alt="">
                                                </a>
                                                    <a href="{{$user->userLink->database_24_7 ?? "https://247sports.com/"}}"target="_blank">
                                                        <img src="{{asset('img/1x/24sports-8.png')}}" height="" width=""
                                                        alt="">
                                                    </a>
                                                    <div class="line"></div>
                                                    <a href="{{$user->userLink->youtube ?? "https://www.youtube.com/"}}" target="_blank">
                                                        <img src="{{asset('img/1x/youtube-8.png')}}" height="" width=""
                                                        alt="">
                                                    </a>
                                                    <a href="{{$user->userLink->hudle ?? "https://www.hudl.com/"}}" target="_blank">
                                                    <img src="{{asset('img/1x/hudl-8.png')}}" height="" width="" alt="">
                                                </a>
                                                </div>
                                            </div>
                                            <div class="forMobile mt1">
                                                <div class="tfour d-flex flex-column justify-content-end ">
                                                    <div class="text-center">
                                                        <a href="" target="_blank"> <img src="{{asset('img/1x/rivals-8.png')}}" height="" width=""
                                                            alt="">
                                                        </a>
                                                            <a href=" "target="_blank">
                                                                <img src="{{asset('img/1x/24sports-8.png')}}" height="" width=""
                                                                alt="">
                                                            </a>
                                                    </div>
                                                    <!-- <div class="line"></div> -->
                                                    <div class="text-center">
                                                        <img src="{{asset('img/1x/youtube-8.png')}}" height="" width=""
                                                            alt="">
                                                        <img src="{{asset('img/1x/hudl-8.png')}}" height="" width=""
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="videoTf d-flex gap-3 justify-content-end">
                                                <img src="assets/img/1x/youtube-8.png" height="" width="" alt="">
                                                <img src="assets/img/1x/hudl-8.png" height=""" width="" alt="">
                                            </div> -->
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="basicInfo mt2 ">
                            <div class="col-lg-12 d-flex socialead">
                                <a href="{{$user->instagram_link ?? "https://www.instagram.com/"}}" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="{{$user->fb_link ?? "https://www.facebook.com"}}" target="_blank"><i class="fa fa-facebook-f"></i></a>
                                <a href="{{$user->twitter_link ?? "https://twitter.com/"}}" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="{{$user->snap_chat_link ?? "https://twitter.com/"}}" target="_blank"><i class="fa fa-snapchat"></i></a>
                            </div>

                            <!-- basic info -->
                            <div class="col-lg-12 mt2 mb2">
                                <h4>Basic Info</h4>
                            </div>
                            <div class="row g-0 infosRow">
                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Full name:</label> <span>{{$user->name ?? "N/A"}}</span>
                                </div>
                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">College or University:</label>
                                    <span>{{$user->college_university ?? "N/A"}}</span>
                                </div>
                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">EMAIL:</label>
                                    <span>{{$user->email ?? "N/A"}}</span>
                                </div>

                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Phone:</label>
                                    <span>{{$user->phone ?? "N/A"}}</span>
                                </div>

                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Summer Football Camps:</label>
                                    <span>{{$user->summer_football_camps ?? "N/A"}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="twittercard">
                    <div class="head">Twitter</div>
                    <div class="twwetBy">
                        <span>Tweets By</span> <span>@mark_porter</span>
                    </div>
                    <div class="twwet">
                        <img src="{{asset('img/1x/twitter-8.png')}}" height="" width="" alt="" />
                    </div>
                    <div class="twwetBy two"></div>
                </div>
            </div>
        </div>
        <!-- tabs -->


    </div>
</div>
@endsection
